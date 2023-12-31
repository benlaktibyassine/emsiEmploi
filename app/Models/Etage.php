<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Local;

class Etage extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_etage';
    protected $fillable = [
        "id_etage",
        "nom_etage",
        "id_local"
    ];

    public function locales()
    {
        return $this->hasMany(Local::class, 'id_local', 'id_local');
    }
}
