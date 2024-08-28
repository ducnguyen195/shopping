<?php
namespace App\Traits;

trait GroupPaymentMethodTrait
{
    private function getMethodPayment ($input) {
        return match ($input) {
            'COD' => 'Đã đặt hàng',
            'MoMo' => 'Đã thanh toán ',
            'VNPay' => 'Đã thanh toán ',
        };
    }
}

