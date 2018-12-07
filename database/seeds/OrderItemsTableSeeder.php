<?php

use App\OrderItems;
use Illuminate\Database\Seeder;

class OrderItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderItems::create([
            'order_id' => 1,
            'product_id' => 1,
            'quantity' => 2,
            'price' => 4000
        ]);
        OrderItems::create([
            'order_id' => 2,
            'product_id' => 2,
            'quantity' => 1,
            'price' => 5000
        ]);
        OrderItems::create([
            'order_id' => 3,
            'product_id' => 3,
            'quantity' => 4,
            'price' => 80000
        ]);
        OrderItems::create([
            'order_id' => 4,
            'product_id' => 4,
            'quantity' => 5,
            'price' => 50000
        ]);
        OrderItems::create([
            'order_id' => 5,
            'product_id' => 5,
            'quantity' => 3,
            'price' => 5000
        ]);
        OrderItems::create([
            'order_id' => 6,
            'product_id' => 6,
            'quantity' => 2,
            'price' => 100000
        ]);
    }
}
