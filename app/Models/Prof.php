<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Prof extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'id_prof';
    protected $table = 'profs';


    protected $fillable = [
        'nom', 'prenom', 'email', 'password', 'tel',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
