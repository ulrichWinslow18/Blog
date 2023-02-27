<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auteur extends Model
{
    protected $table = "auteurs";
    protected $fillable=['nom','prenoms'];

    use HasFactory;
}
