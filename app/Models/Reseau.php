<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reseau extends Model
{
    use HasFactory;
    protected $fillable=[
        "id_reseau",
        "nom_reseau"
    ];
    public function profs(){
        return $this->hasMany(Prof::class);
    }
}
