<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    protected $table = "portfolio_categories";
    protected $guarded = [];

    public function category()
    {
        return $this->belongsToMany(Portfolio::class, 'portfolio_pivot', 'id_portfolio', 'id_portfolio_category');
    }
}
