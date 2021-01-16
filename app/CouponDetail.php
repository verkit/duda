<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CouponDetail extends Model
{
    protected $table = 'coupon_details';
    protected $guarded = [];

    public function coupon(){
        return $this->belongsTo('App\Coupon', 'id_coupon');
    }

    public function product(){
        return $this->belongsTo('App\Product', 'id_product');
    }
}
