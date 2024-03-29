<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Notifications\message;
use Illuminate\Support\Facades\Notification;

class orderController extends Controller
{

    public function index($itemId)
    {
        $this->itemId = $itemId;
        $items = Item::where('itemId', $this->itemId)->first();//get itemid
        return view('frontend.Order.addOrder', compact('items'));
    }

    //add in order
    public function create(Request $request)
    {

        $order = new Order();
        $order->userId = $request->userId;
        $order->itemName = $request->itemName;
        $order->price = $request->price;
        $order->itemId = $request->itemId;
        $order->quantity = $request->quantity;
        $order->totalPrice = $request->totalPrice;
        $order->save();
        // return back()->with('message', 'Order added successfully');
        return redirect()->route('allOrder');
    }

    //used to show data
    public function all()
    {
        $orders = Order::orderBy('created_at', 'DESC')
            ->where('userId', Auth::user()->id)
            ->whereDate('created_at', date('Y-m-d'))
            ->get();
        return view('frontend.Order.allOrder', compact('orders'));
    }


    public function delete($orderId)
    {
        Order::where('orderID', $orderId)->delete();
        return back()->with('message', 'Order deleted successfully.');
    }

    //ALL order from user
    public function adminOrder()
    {
        $orders = Order::all();
        return view('admin.UserOrder.orders', compact('orders'));
    }


    //for notification
    public function notification($user)
    {
        //  $user= User::where('id','user')->get();
        $user = User::all();
        Notification::send($user, new message);
        return redirect()->route('adminOrder');
    }

    public function rating()
    {
        return $this->hasMany(Rating::class);
    }
}
