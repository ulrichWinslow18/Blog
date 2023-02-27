<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mots_cle_article extends Model
{
    protected $fillable=['mot_cle','slug'];
    use HasFactory;
    public function article()
    {
        return $this->belongsTo('App\Models\article');
    }
    public function motsCle()
    {
        return $this->belongsTo('App\Models\Mots_cle');
    }
}
