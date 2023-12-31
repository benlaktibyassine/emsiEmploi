<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Local;

class Etage extends Model
{
    use HasFactory;
    protected $fillable=[
        "id_etage",
        "nom_etage",
        "id_local"
    ];

    public function locale()
    {
        return $this->belongsTo(Local::class, 'id_local', 'id_locale');
    }
}
