<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock_movimentos extends Model
{
  use HasFactory;
  protected $fillable = [
    'user_id',
    'product_id',
    'quantidade',

  ];

  public function getResponsavel()
  {
    return User::find($this->user_id);
  }
}
