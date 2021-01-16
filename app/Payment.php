<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $guarded = [];

    protected $dates = [
        'created_at',
        'updated_at',
        'deadline'
    ];

    public function bank(){
        return $this->belongsTo('App\Bank', 'id_bank');
    }

    public function invoice(){
        return $this->belongsTo('App\Order', 'invoice');
    }
}
