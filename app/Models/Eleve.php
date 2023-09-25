<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{

    protected $primaryKey = 'id';
    protected $fillable = ['nom','prenom','dateNaissance','numeroEtudiant','email','image'];

    public function evaluation_eleve(){
        return $this->hasMany(EvaluationEleve::class);
    }

}
