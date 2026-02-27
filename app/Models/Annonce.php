<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    //
    protected $table = "annonces";
    protected $primaryKey = 'id';
    protected $fillable = [
        "titre", "desc", "type", "ville", "superficie", "etat", "prix", "photo"
    ];
}
