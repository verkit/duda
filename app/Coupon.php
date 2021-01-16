<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table = 'coupons';
    protected $guarded = [];

    public function detail(){
        return $this->hasMany('App\CouponDetail', 'id_coupon');
    }
}
