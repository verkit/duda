<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $guarded = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function product(){
        return $this->belongsTo('App\Product', 'id_product');
    }

    public function admin(){
        return $this->belongsTo('App\User', 'id_user');
    }

    public function coupon(){
        return $this->belongsTo('App\Coupon', 'id_coupon');
    }

    public function payment(){
        // return $this->hasMany('App\CouponDetail', 'id_product');
        return $this->hasOne('App\Payment', 'invoice', 'invoice');
    }

    public function this_status(){
        return $this->belongsTo('App\OrderStatus', 'status');
    }
}
