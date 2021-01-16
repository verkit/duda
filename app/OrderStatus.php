<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    protected $table = 'order_statuses';
    protected $guarded = [];

    public function order(){
        return $this->hasMany('App\Order', 'status');
    }
}
