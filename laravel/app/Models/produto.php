<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    use HasFactory;
    protected $fillable =  [
        'categoria',
        'nome_produto',
        'quantidade',
        'reorder_point',
    ];
}
