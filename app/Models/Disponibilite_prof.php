<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponibilite_prof extends Model
{
    use HasFactory;
    protected $fillable = [
        'jour',
        'matin',
        'apres_midi',
        'id_prof',
        'id_semestre',
    ];

    public function professeur()
    {
        return $this->hasOne(Professeur::class, 'id_prof');
    }
}
