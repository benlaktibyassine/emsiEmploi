<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    use HasFactory;

    protected $table = 'respo';

    protected $fillable = [
        'id_prof',
    ];

    public function prof()
    {
        return $this->belongsTo(Prof::class, 'id_prof');
    }
}
