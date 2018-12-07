<?php

namespace App\Http\Controllers\Front;

use App\User;
use App\Order;
use App\Http\Controllers\Controller;

class UserProfileController extends Controller
{

    public function index(){
        $id = auth()->user()->id;
        $user = User::where('id', $id)->first();
        return view('front.profile.index', compact('user'));
    }

    public function show($id){
        //$order = Order::find($id);
        $orders = Order::with(['OrderItems' => function ($relation) {
            $relation->with(['product', 'order']);
        }])->where('id', $id)->get();
       // dd($orders);
        return view('front.profile.details', compact('orders'));
    }
}
