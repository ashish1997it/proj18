<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //one to many (inverse) **
    public function user(){
    	return $this->belongsTo(User::class);
    }
    //ter=> $user = App\Order::find(2)->user;

    //one to one /rig
    public function invoice(){
        return $this->hasOne(Invoice::class);
    }
    //ter=> $invoice = App\Order::find(3)->invoice;


    //many to many
    public function items(){
    	return $this->belongsToMany(Item::class);
    }
    //ter=> $item = App\Order::find(1)->items;

}
