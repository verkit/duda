<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table = "news_categories";
    protected $guarded = [];

    public function category(){
        return $this->belongsToMany(News::class, 'news_pivot', 'id_news', 'id_news_category');
    }
}
