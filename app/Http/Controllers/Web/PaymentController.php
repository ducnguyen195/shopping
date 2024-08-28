<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\PaymentMethod;
use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\GroupPaymentMethodTrait;

class PaymentController extends Controller
{
    use GroupPaymentMethodTrait;
    public function index(): View|Application|Factory
    {
        $userID = Auth::user()->id;
        $cartProduct = \Cart::session($userID)->getContent();
        $subTotal = \Cart::session($userID)->getTotal();
        $cartTotalQuantity = \Cart::session($userID)->getTotalQuantity();
        return view('web.content.payment.payment',[
            'cartProduct' => $cartProduct,
            'subTotal' => $subTotal,
            'cartTotalQuantity' => $cartTotalQuantity,
            ]);
    }

    public function createOrder(Request $request) {
        $userID = Auth::user()->id;
        $input = $request->all();
        $cartContent = \Cart::session($userID)->getContent();
         foreach ($cartContent as $item) {
             $product = Product::find($item->id);
             if ($product->quantity < $item->quantity) {
                 return redirect()->route('shop.cart_index')->withErrors(['quantity' => 'Sản phẩm ' . $product->name . ' không đủ số lượng trong kho.']);
             }
         }

        // Hóa đơn
        $paymentMethod = PaymentMethod::create([
            "name" => $input['name'] ?? Auth::user()->name,
            "information" => $input['email']. ',' . $input['phone']. ',' . $input['note'].'-' . $input['phuong']. '-'. $input['quan']. '-' . $input['tinh'],
            "method" => $input['payments'],
        ]);

        //Đơn hàng
        $order = Order::create([
            "user_id" => Auth::user()->id,
            "payment_method_id" => $paymentMethod->id,
            "total" => (int)\Cart::session($userID)->getTotal() + (int)$input["transport"],
            "discount" => 0 ,
            "status" => $this->getMethodPayment($paymentMethod->method),
        ]);

        //Danh sách sản phẩm
        foreach ($cartContent as $item) {
            $product = Product::find($item->id);
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->id,
                'quantity' => $item->quantity,
                'price' => $item->price,
                'discount'=> $product->discount_persent,
            ]);

            // Cập nhật số lượng trong  kho
            $product->quantity -= $item->quantity;
            $product->save();
        }

        //Thanh toan COD
        if($input['payments'] == 'COD') {
            // Xóa sản phẩm{
            \Cart::session($userID)->clear();
            return  redirect()->route('shop.payment_result')->with('notification',' Đặt hàng thành công, Kiểm tra đơn hàng và mã vận đơn ở đây !');
        }
       //Thanh toan online
        if ($input['payments'] == 'VNPay') {
            $this->vnpay_payment($order);
             return $order ;
        }

    }


    public function vnpay_payment($order)
    {
        $vnp_Url ="https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://shoponline.th/payment/vnpay_check";
        $vnp_TmnCode = "TFS6JUC5";//Mã website tại VNPAY
        $vnp_HashSecret = "G5UD1R7YTRTVUACT31RTW0XYFXRQB58T"; //Chuỗi bí mật
        $vnp_TxnRef = $order->id; //Mã đơn hàng
        $vnp_OrderInfo = "Thanh toan don hang";
        $vnp_OrderType = "billpayment";
        $vnp_Amount = $order->total * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params of 2.0.1 Version
    //    $vnp_ExpireDate = $_POST['txtexpire'];

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef
    //        "vnp_ExpireDate"=>$vnp_ExpireDate
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }


        ksort($inputData);
        $hashdata = '';
        foreach ($inputData as $key => $value) {
            if ($hashdata !== '') {
                $hashdata .= '&';
            }
            $hashdata .= urlencode($key) . '=' . urlencode($value);
        }

        $query = http_build_query($inputData);

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            $vnp_Url .= '&vnp_SecureHash=' . $vnpSecureHash;
        }


        $returnData = array('code' => '00'
        , 'message' => 'success'
        , 'data' => $vnp_Url);
            if (isset($_POST['redirect'])) {
                header('Location: ' . $vnp_Url);
                die();
            } else {
                echo json_encode($returnData);
            }
    }

    public function checkPayment(Request $request) {
        $userID = Auth::user()->id;
        $vnp_Returnurl = $request->get('vnp_Returnurl');
        $vnp_TxnRef = $request->get('vnp_TxnRef '); // id đơn hàng

        // check kết quả
        if ($vnp_Returnurl != null){
            if ($vnp_Returnurl == 00) {
                \Cart::seesion($userID)->clear();
                return  redirect()->route('shop.payment_result')->with('notification','Thanh toán đơn hàng thành công , Kiểm tra đơn hàng và mã vận đơn ở đây !');
            } else {
                $vnp_TxnRef->delete();
                return  redirect()->route('shop.payment_result')->with('notification','Lỗi : Thanh toán không thành công !');
            }
        }
    }

    public function result (): View|Application|Factory
    {
        $categories = Category::where('model_type','=','product')->where('parent_id','=',0)->with('children')->get();
        $notification = session('notification');
        return view('web.content.payment.result',['categories'=> $categories, 'notification' => $notification]);

    }
}
