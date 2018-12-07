<?php

namespace App\Http\Controllers\Front;

use Cartalyst\Stripe\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderItems;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('front.checkout.index');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request){
        try{
            $stripe = Stripe::make('sk_test_fy5CdjqkAsgU805yecLoIfRb');
            $stripe->charges()->create([
                'amount' => Cart::total(),
                'currency'=>'USD',
                'source'=>$request->stripeToken,
                'description'=>'Paying for items ',
                'metadata'=>[
                        'content' => 'test',
                        'quantity'=>Cart::instance('default')->count()
                ]
            ]);


            //Insert into orders table
            $order = Order::create([
                'user_id' => auth()->user()->id,
                'date'    => Carbon::now(),
                'address' => $request->address,
                'status'  => 0
            ]);

            //Insert into order items table
            foreach (Cart::instance('default')->content() as $item){
                OrderItems::create([
                    'order_id'   => $order->id,
                    'product_id' => $item->model->id,
                    'quantity'   => $item->qty,
                    'price'      => $item->price
                ]);
            }

            Cart::instance('default')->destroy();

            return redirect()->back()->with('msg', 'Payment Success. Thank you!');
            //Success

        } catch (Exception $e){
            //Code
        }

    }
}
