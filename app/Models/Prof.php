<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Prof extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'id_prof';

    protected $table = 'profs';

    protected $fillable = [
        'id_prof', 'nom', 'prenom', 'email', 'password', 'tel',
    ];
    public function responsables()
    {
        return $this->hasOne(Responsable::class, 'id_prof');
    }
}
