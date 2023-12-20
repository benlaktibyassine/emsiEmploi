<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    use HasFactory;
    protected $fillable=[
        "id_prof",
        "nom_prof"
    ];
    public function responsable(){
        return $this->hasMany(Responsable::class);
    }
}
