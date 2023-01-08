<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory, Uuid;


    protected $fillable = [
        'ine',
        'nom',
        'prenom',
        'date_naissance',
        'lieu_naissance',
        'sexe',
        'classe_id',
    ];
    public function getRouteKeyName()
    {
        return 'id';
    }

    // on recupere toutes les absences de l'eleve
    public function Abscences()
    {
        return $this->hasMany(Abscence::class);
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    protected $casts = [
        'id' => 'string',
    ];
}
