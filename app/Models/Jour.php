<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jour extends Model
{
    use HasFactory;
    protected $fillable=[
        "id_jour",
        "nom_jour"
    ];
}
