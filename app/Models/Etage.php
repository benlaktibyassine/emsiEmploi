<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etage extends Model
{
    use HasFactory;
    protected $fillable=[
        "id_etage",
        "nom_etage",
        "id_local"
    ];
}
