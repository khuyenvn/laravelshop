<?php
/**
 * Created by PhpStorm.
 * User: khuyentn
 * Date: 31/10/2018
 * Time: 16:57
 */

namespace App\Http\Controllers;


use App\Order;
use App\Product;
use App\User;

class DashboardController extends Controller
{

      public function index(){
        $products = new Product();
        $users = new User();
        $orders = new Order();
        return view('admin.dashboard', compact('products', 'users', 'orders'));
    }
}