<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable =[
        'name',
        'contenu',
        'slug',
        'image',
        'link',
    ];
    use HasFactory;
}
