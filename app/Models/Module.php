<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory, Uuid;
    protected $fillable = [
        "id",
        "code",
        "nom",
    ];
    // on recupere les les scenaces de cours d'un module
    public function sceance_cours()
    {
        return $this->hasMany(SceanceCour::class);
    }

    protected $casts = [
        'id' => 'string',
    ];

    public function absences()
    {
        return $this->hasManyThrough(Abscence::class, SceanceCour::class);
    }
}
