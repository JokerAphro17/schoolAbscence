<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abscence extends Model
{
    use HasFactory, Uuid;

    protected $fillable =[
        "eleve_id",
        "sceance_cour_id",
        "motif",
    ];
    // cette fonction permet de recuperer tout les eleves qui ont une absence 

    public function eleves()
    {
        return $this->belongsTo(Eleve::class);
    }

    protected $casts = [
        'id' => 'string',
    ];

    public function seance_cour(){
        return $this->belongsTo(seance_cour::class);
    }
}
