<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitantes extends Model
{
    protected $fillable = [
        'comunidades_id','name', 'email', 'telefone'
    ];
}
