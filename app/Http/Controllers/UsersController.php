<?php

namespace App\Http\Controllers;

use App\OrderItems;
use App\Product;
use App\User;
use App\Order;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function show($id)
    {
        $orders = Order::with(['OrderItems' => function ($relation) {
            $relation->with(['product', 'order']);
        }])->where('user_id', $id)->get();
        return view('admin.users.details', compact('orders'));
    }
}
