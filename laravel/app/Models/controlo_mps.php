<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class controlo_mps extends Model
{
    use HasFactory;
    protected $fillable = [
        'data_receçao',
        'fornecedor',
        'num_fatura',
        'data_val',
        'lote',
        'higiene',
        'temperatura',
        'nome_produto',
        'peso',
        'aspeto',
        'açoes_corretivas',
        'responsavel',
    ];

    public function getResponsavel() {
        return User::find($this->responsavel);
    }   


}
