<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class orderController extends Controller
{

    public function index($itemId) {
        $this->itemId=$itemId;
        $items=Item::where('itemId',$this->itemId)->first();
        $orders = Order::orderBy('created_at','DESC')
            ->where('userId',Auth::user()->name)
            ->whereDate('created_at',date('Y-m-d'))
            ->get();
        return view('frontend.addOrder', compact('items'));
    }

    public function create(Request $request) {
        $order= new Order();
        $order->userId = $request->userId;
        $order->itemName=$request->itemName;
        $order->price = $request->price;
        $order->itemId = $request->itemId;
        $order->quantity = $request->quantity;
        $order->totalPrice = $request->totalPrice;
        $order->save();
        return back()->with('message', 'Order added successfully');
    }

    //used to show data
    public function all() {
        $orders = Order::all();
        return view('frontend.allOrder', compact('orders'));
    }

    //get id and show edit page
    public function edit($orderId) {
        $items = Item::all();
        $order = Order::find($orderId);
        return view('frontend.editOrder', compact('order', 'items'));
    }

    //update data of item
    public function update(Request $request) {
        $orders = Order::find($request->orderId);
        $orders->itemName = $request->itemName;
        $orders->price = $request->price;
        $orders->itemId = $request->itemId;
        $orders->quantity = $request->quantity;
        $orders->totalPrice = $request->totalPrice;
        $orders->save();
        return back()->with('message', 'Order updated successfully.');
    }

    public function delete($orderId) {
        Order::where('OrderID', $orderId)->delete();
        return back()->with('message', 'Order deleted successfully.');
    }

}
