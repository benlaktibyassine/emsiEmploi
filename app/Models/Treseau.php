<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treseau extends Model
{
    use HasFactory;
    protected $fillable=[
        "id_treseau",
        "nom_treseau"
    ];
}
