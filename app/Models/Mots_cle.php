<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mots_cle extends Model
{
    use HasFactory;

    public function motsCle()
    {
        return $this->hasMany('App\Models\Mots_cle_article');
    }
}
