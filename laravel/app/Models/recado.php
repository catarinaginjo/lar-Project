<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recado extends Model
{
    use HasFactory;
    //protected $table='recado';
    protected $fillable = [
        'assunto',
        'recado',
        'descriçao',
        'responsavel',
    ];
}
