<?php

namespace App\Http\Controllers;

use App\OrderItems;
use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }

    public function confirm($id){
        //Find order
        $order = Order::find($id);

        //Update order
        $order->update(['status' => 1]);

        //Show message
        session()->flash('msg', 'Order has been confirm');

        //Redirect page
        return  redirect('admin/orders');
    }

    public function pending($id){
        //Find order
        $order = Order::find($id);

        //Update order
        $order->update(['status' => 0]);

        //Show message
        session()->flash('msg', 'Order has been again into pending');

        //Redirect page
        return  redirect('admin/orders');
    }

    public function show($id){
        $order = Order::find($id);
        $order_items = OrderItems::where('order_id','=', $order->id)->get();
        return view('admin.orders.details', compact('order', 'order_items'));
    }
}
