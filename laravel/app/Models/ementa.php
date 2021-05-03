<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ementa extends Model
{
    use HasFactory;

    protected $table = "ementa";
    
    protected $fillable = [
        'nutricionista',
        'info',
        'data_inicio',
        'data_fim',

        'seg_sopa',
        'seg_almoço',
        'seg_sob_almoço',
        'seg_jantar',
        'seg_sob_jantar',

        'ter_sopa',
        'ter_almoço',
        'ter_sob_almoço',
        'ter_jantar',
        'ter_sob_jantar',

        'qua_sopa',
        'qua_almoço',
        'qua_sob_almoço',
        'qua_jantar',
        'qua_sob_jantar',

        'qui_sopa',
        'qui_almoço',
        'qui_sob_almoço',
        'qui_jantar',
        'qui_sob_jantar',

        'sex_sopa',
        'sex_almoço',
        'sex_sob_almoço',
        'sex_jantar',
        'sex_sob_jantar',

        'sab_sopa',
        'sab_almoço',
        'sab_sob_almoço',
        'sab_jantar',
        'sab_sob_jantar',

        'dom_sopa',
        'dom_almoço',
        'dom_sob_almoço',
        'dom_jantar',
        'dom_sob_jantar',


    ];
}
