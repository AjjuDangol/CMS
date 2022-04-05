<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function create(Request $request) {
        $payment= new Payment();
        $payment->paypalID=$request->paypalID;
        $payment->orderId=$request->orderId;
        $payment->userId = $request->userId;
        $payment->itemName = $request->itemName;
        $payment->userName = $request->userName;
        $payment->totalPrice = $request->totalPrice;
        $payment->save();

        // return back()->with('message', 'Order added successfully');
        return redirect()->route('createPayment');
    }

    public function index($orderId) {
        $this->orderId = $orderId;
        $order = Order::where('orderId',$this->orderId)->first();
        // $orders = Order::all();
        $user = User::all();
        return view('payment.pay', compact('order','user'));
    }
}
