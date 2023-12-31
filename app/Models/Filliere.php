<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filliere extends Model
{
    use HasFactory;
    protected $primaryKey = 'code_filliere';
    protected $table = 'filliere';
    protected $casts = [
        'code_filliere' => 'string',
    ];

    protected $fillable=[
        "code_filliere",
        "nom_filliere"
    ];
}
