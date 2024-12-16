<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agent extends Model
{
   use HasFactory;
   protected $fillable = ['matricule', 'nom_prenom', 'email', 'password', 'localisation'];

   protected $hidden = [
    'password'

];


public function equipements(){
    return $this->hasMany(equipement::class);
}





}
