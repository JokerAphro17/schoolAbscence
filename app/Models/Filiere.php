<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory, Uuid;
    protected $fillable = [
        "nom",
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }

    protected $casts = [
        'id' => 'string',
    ];
}
