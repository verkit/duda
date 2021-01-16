<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = "notifications";
    protected $guarded = [];
    protected $date = [
        'created_at',
        'updated_at'
    ];
}
