<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utentes extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'apelido',
        'contacto_familiar',
        'diabetes',
        'dependencia',
        'medicaçao',
        'doença',
        'condiçao',
        'foto',
        'alergia',
        'data_nascimento',
        'morada',
        'localidade',
        'dieta',
        'hipertensao',
    ];
}
