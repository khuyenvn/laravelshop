<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected  $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function OrderItems(){
        return $this->hasMany(OrderItems::class, 'order_id');
    }

    public function products(){
        return $this->belongsToMany(Product::class, 'order_items');
    }
}
