<?php

namespace App\Models;
use DateTime;
use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;
    protected $fillable = [
        'nome',
        'apelido',
        'email',
        'username',
        'password',
        'apelido',
        'contacto',
        'cargo',
        'data_nascimento',
        'morada',
        'localidade',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function foto()
    {
        return Storage::url('public/images/users/' . $this->id . '.png');
    }
    public function delete_foto_from_storage()
    {
        Storage::delete('public/images/users/' . $this->id . '.png');
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
