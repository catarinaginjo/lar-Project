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
        'reorder_point',
    ];

    public function getQuantidade()
    {
        return  stock_movimentos::orderBy('created_at', 'desc')->get()->where('product_id', '=', $this->id)->sum('quantidade');;
    }
}
