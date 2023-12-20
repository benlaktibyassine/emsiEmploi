<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matiere;
use App\Models\Groupe;

class Seance extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_seance',
        'titre_seance',
        'debut',
        'fin',
        'id_jour',
        'id_groupe',
        'id_prof',
        'id_matiere',
        'id_sem',
        'code_salle',
        'id_type'
    ];
    public function jour()
    {
        return $this->belongsTo(Jour::class);
    }
    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }
    public function prof()
    {
        return $this->belongsTo(Prof::class);
    }
    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }
    public function sem(){
        return $this->belongsTo(Sem::class);
    }
    public function type(){
        return $this->belongsTo(Type::class);
    }
    public function salle(){
        return $this->belongsTo(Salle::class);
    }

}
