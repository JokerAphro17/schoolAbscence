<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SceanceCour extends Model
{
    use HasFactory, Uuid;

    // on recupere le module d'une sceance de cours

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
