<?php

namespace App\Http\Controllers\Front;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaveLaterController extends Controller
{
    public function moveToCart($productId)
    {
        $item = Cart::instance('saveForLater')->get($productId);
        Cart::remove($productId);
        $duplicate = Cart::instance('saveForLater')->search(function ($cartItem, $rowId) use ($productId) {
            return $cartItem->id === $productId;
        });
        if ($duplicate->isNotEmpty()) {
            return redirect()->back()->with('msg', 'Item is save for later');
        }
        Cart::instance('default')->add($item->id, $item->name, 1, $item->price)->associate('App\Product');
        return redirect()->back()->with('msg', 'Item has been moved to cart');
    }

    public function destroy($id){
        Cart::instance('saveForLater')->remove($id);
        return redirect()->back()->with('msg', 'Item has been removed save for later');
    }
}
