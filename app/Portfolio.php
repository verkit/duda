<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = "portfolios";
    protected $guarded = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function category(){
        return $this->belongsToMany(PortfolioCategory::class, 'portfolio_pivot', 'id_portfolio', 'id_portfolio_category');
    }
}
