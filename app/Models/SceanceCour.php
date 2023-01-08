<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SceanceCour extends Model
{
    use HasFactory, Uuid;
    protected $fillable =[
        "module_id",
        "classe_id",
        "enseignant_id",
        "duree",
        "date",
    ];

    // on recupere le module d'une sceance de cours

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    protected $casts = [
        'id' => 'string',
    ];
}
