<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubServices extends Model
{
    protected $table = 'sub_services';
    protected $guarded = [];

    public function service(){
        return $this->belongsTo('App\Service', 'id_service');
    }

    public function product(){
        return $this->hasMany(Product::class, 'id_subservice');
    }
}
