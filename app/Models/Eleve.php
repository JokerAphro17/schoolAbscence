<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory, Uuid;

    // on recupere toutes les absences de l'eleve
    public function Abscences()
    {
        return $this->hasMany(Abscence::class);
    }
}