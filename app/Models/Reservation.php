<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    /**
     * Les attributs qui sont mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'email',
        'profession',
        'pays_residence',
        'date_naissance',
        'nombre_personnes',
        'date_entree',
        'date_sortie',
        'type_chambre',
        'prix',
        'voiturier',
    ];
}
