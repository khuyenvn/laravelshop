<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'iPhone 8 64GB PRODUCT RED',
            'price'=>'8000',
            'description'=>'This is some text for the iPhone 8 64GB PRODUCT RED',
            'image'=>'iphone-8-plus-red.png'
        ]);
        Product::create([
            'name'=>'Apple Watch Series 3 GPS',
            'price'=>'2000',
            'description'=>'This is some text for the Apple Watch Series 3 GPS',
            'image'=>'Aw3GPS.jpg'
        ]);
        Product::create([
            'name'=>'iPhone Xs 64GB',
            'price'=>'5000',
            'description'=>'This is some text for the iPhone Xs 64GB',
            'image'=>'iphone-xs.png'
        ]);
        Product::create([
            'name'=>'Apple Watch Series 4 GPS',
            'price'=>'5000',
            'description'=>'This is some text for the Apple Watch Series 4 GPS',
            'image'=>'app4.png'
        ]);
        Product::create([
            'name'=>'Macbook Air 13 128GB 2018',
            'price'=>'2000',
            'description'=>'This is some text for the Macbook Air 13 128GB 2018',
            'image'=>'macbookgold.png'
        ]);
        Product::create([
            'name'=>'Apple Watch 38mm Pink Sand Sport Loop',
            'price'=>'8000',
            'description'=>'This is some text for the Apple Watch 38mm Pink Sand Sport Loop',
            'image'=>'appwatch.png'
        ]);
        Product::create([
            'name'=>'iPad Pro 12.9 WI-FI 4G 1TB 2018',
            'price'=>'8000',
            'description'=>'This is some text for the iPad Pro 12.9 WI-FI 4G 1TB 2018',
            'image'=>'ipad.png'
        ]);
        Product::create([
            'name'=>'iPad Pro 10.5 WI-FI 64GB',
            'price'=>'2000',
            'description'=>'This is some text for the iPad Pro 10.5 WI-FI 64GB',
            'image'=>'ipad_pro_2017_10_5.png'
        ]);
        Product::create([
            'name'=>'iMac 21.5 4K - MNDY2SA/A',
            'price'=>'5000',
            'description'=>'This is some text for the iMac 21.5 4K - MNDY2SA/A',
            'image'=>'imac.png'
        ]);
        Product::create([
            'name'=>'Lenovo presosnik Yoga 900 13ISK',
            'price'=>'8000',
            'description'=>'This is some text for the Lenovo presosnik Yoga 900 13ISK',
            'image'=>'01.jpg'
        ]);
        Product::create([
            'name'=>'HP Pavilion 14-ce0024TU',
            'price'=>'2000',
            'description'=>'This is some text for the HP Pavilion 14-ce0024TU',
            'image'=>'hp.jpg'
        ]);
        Product::create([
            'name'=>'Lenovo Ideapad 330S-14IKB 81F400NMVN ',
            'price'=>'5000',
            'description'=>'This is some text for the Lenovo Ideapad 330S-14IKB 81F400NMVN ',
            'image'=>'lenovo.jpg'
        ]);
    }
}
