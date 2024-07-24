<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(): View|Application|Factory
    {
        $orders = Order::all();
        return view('admin.content.order.index',['orders' => $orders]);
    }
}
