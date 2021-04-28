<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recados extends Model
{
    use HasFactory;
    protected $fillable = [
        'assunto',
        'recado',
        'descriçao',
    ];
}
