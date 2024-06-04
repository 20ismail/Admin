<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = [
        'intitule_module',
        'heuresCours',
        'heuresTD',
        'heuresTP',
        'niveau',
        'id_prof',
        'id_semestre',
        'id_filiere',
    ];
    public function filiere()
    {
        return $this->hasOne(Filiere::class, 'id_filiere', 'id');
    }

    public function professeur()
    {
        return $this->hasOne(Professeur::class, 'id_prof', 'id');
    }


}
