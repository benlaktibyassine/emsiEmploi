<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    protected $fillable=[

        "nom_groupe",
        "code_filliere"
    ];
    public function fillieres() {
        return $this->belongsTo(Filliere::class, 'code_filliere');
        
    }
}

