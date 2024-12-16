<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class equipement extends Model
{
    use HasFactory;
    protected $fillable = ['num_serie', 'designation_equipement', 'nom_equipement', 'type_equipement', 'date_acq', 'localisation_equipement', 'matricule'];



    public function composants(){
        return $this->hasMany(Composant::class);
    }

    public function agents(){
        return $this->belongsTo(Agent::class);
    }
}
