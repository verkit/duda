<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
   protected $table = 'banks';
   protected $guarded = [];

   public function payment(){
       return $this->hasMany('App\Payment', 'id_bank');
   }
}
