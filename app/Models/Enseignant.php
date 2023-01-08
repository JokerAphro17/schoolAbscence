<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;


class Enseignant extends Model
{
    use HasFactory, Uuid;
    protected $fillable = [
        "nom",
        "prenom",
        "email",
        "adresse",
        "telephone",
    ];
}
