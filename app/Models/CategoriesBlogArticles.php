<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesBlogArticles extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsTo('App\Models\categoriesBlog');
    }
    public function articles()
    {
        return $this->belongsTo('App\Models\article');
    }
}
