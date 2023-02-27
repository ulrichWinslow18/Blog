<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $table= "articles";
    protected $fillable = ['auteur_id','titre', 'sousTitre','slug','contenu','image1','image2','image3'];
    use HasFactory;

    public function motCle()
    {
        return $this->belongsTo('App\Models\mots_cle_articles');
    }
    
}

