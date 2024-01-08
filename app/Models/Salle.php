<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;
    protected $primaryKey = 'code_salle';
    protected $keyType = 'string';
    protected $fillable=[
        "code_salle",
        "id_etage",
        "id_type"
    ];

    public function etage()
    {
        return $this->belongsTo(Etage::class, 'id_etage', 'id_etage');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'id_type', 'id');
    }
}
