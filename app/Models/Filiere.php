<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;

    protected $fillable = [
        'intitule_filiere',
        'cycle',
        'idDepartement'
    ];
    public function modules()
    {
        return $this->hasMany(Module::class, 'id_filiere', 'id');
    }
    

}
