<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";
    protected $guarded = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function category(){
        return $this->belongsToMany(NewsCategory::class, 'news_pivot', 'id_news', 'id_news_category');
    }
}
