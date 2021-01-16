<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $guarded = [];

    public function sub(){
        return $this->hasMany('App\SubServices', 'id_service');
    }
}
