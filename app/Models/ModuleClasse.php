<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleClasse extends Model
{
    use HasFactory;
    protected $fillable =[
        "module_id",
        "classe_id",
    ];
}
