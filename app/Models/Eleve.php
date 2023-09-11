<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['nom','premom','dateNaissance','numeroEtuidiant','email','image'];
}
