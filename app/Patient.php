<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $fillable = [
        'nom', 'prenom', 'telephone','adresse','maladie','remarque','fidel',
    ];

}
