<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory, Uuid;
    protected $fillable = [
        "nom",
        "filiere_id",
    ];

    protected $casts = [
        'id' => 'string',
    ];
    public function getRouteKeyName()
    {
        return 'id';
    }


    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }
}
