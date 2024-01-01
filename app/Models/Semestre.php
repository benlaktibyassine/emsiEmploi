<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_sem'; // Assurez-vous que c'est la colonne de clé primaire correcte
    protected $fillable = ['sem'];
}
