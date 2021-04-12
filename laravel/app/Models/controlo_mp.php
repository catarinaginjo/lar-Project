<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class controlo_mp extends Model
{
    use HasFactory;
    protected $fillable = [
        'data_receçao',
        'fornecedor',
        'num_fatura',
        'data_val',
        'lote',
        'higiente',
        'temperatura',
        'peso',
        'aspeto'
        
    ];
}
