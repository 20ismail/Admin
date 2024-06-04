<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'numTelephone',
        'password',
        'heuresEnseignementAnnee',
        'image',
        'id_admin',
    ];

    public function modules()
    {
        return $this->hasMany(Module::class, 'id_prof', 'id');
    }
    // public function disponibilites()
    // {
    //     return $this->hasMany(DisponibiliteProf::class, 'id_prof');
    // }
}
