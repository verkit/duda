<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = [];

    public function sub(){
        return $this->belongsTo('App\SubServices', 'id_subservice');
    }

    public function coupon(){
        return $this->hasMany('App\CouponDetail', 'id_product');
    }
}
