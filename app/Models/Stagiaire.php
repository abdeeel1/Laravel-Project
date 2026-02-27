<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    //
    protected $table = "stagiaires";
    protected $fillable = [
        "nom", "genre", "note", "groupe"
    ];
}
