<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class tarefas_utente extends Model
{
    use HasFactory;
    protected $with = ['auxiliar'];

    public function auxiliar() {
        return $this->belongsTo('App\Models\User', 'auxiliar_id', 'id');
    }
}

