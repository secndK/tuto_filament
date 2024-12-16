<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Composant extends Model
{
    use HasFactory;

   protected $fillable = ['code_composant', 'designation_composant', 'nom_composant', 'num_serie'];

   public function equipements(){

        return $this->belongsTo(equipement::class);
   }


}