<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_local';
    protected $table = 'locals';

    protected $fillable = [
        "id_local",
        "nom_local"
    ];
    public function etage()
    {
        return $this->belongsTo(Etage::class, 'id_local');
    }
}
