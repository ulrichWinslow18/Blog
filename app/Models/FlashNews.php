<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlashNews extends Model
{
    protected $fillable =[
        'libelle',
    ];
    use HasFactory;
}
