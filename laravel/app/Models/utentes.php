<?php

namespace App\Models;

use DateTime;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//na bd tem 14 campos (+ foto)

class utentes extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'apelido',
        'contacto_familiar',
        'diabetes',
        'medicaçao',
        'doença',
        'condiçao',
        'foto',
        'alergia',
        'data_nascimento',
        'morada',
        'localidade',
        'cuidados',
        'dieta',
        'hipertensao',
    ];

    public function foto()
    {
        return Storage::url('public/images/utentes/' . $this->id . '.png');
    }
    public function delete_foto_from_storage()
    {
        Storage::delete('public/images/utentes/' . $this->id . '.png');
    }

    public function idade()
    {
        $format = "Y-m-d";

        $nascimento = DateTime::createFromFormat($format, $this->data_nascimento);
        $hoje = new DateTime("now");

        $idade = $nascimento->diff($hoje);
        //die(var_dump($idade));
        return $idade->format('%y');
    }
}
