<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_matiere';

    protected $table = 'matieres';
    protected $fillable=[
        "id_matiere",
        "nom_matiere"
    ];
}
