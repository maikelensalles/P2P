<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revenda extends Model
{
    protected $table = 'revendas';

    protected $fillable = ['id', 'usuario', 'creditos', 'dono', 'master', 'email', 'password',];

}
