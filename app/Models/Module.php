<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory, Uuid;
    protected $fillable =[
        "code",
        "nom",
    ];
    // on recupere les les scenaces de cours d'un module
    public function sceanceCours()
    {
        return $this->hasMany(SceanceCour::class);
    }
}
