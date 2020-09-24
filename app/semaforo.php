<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class semaforo extends Model
{
    protected $fillable = [
        'rojo', 'amarillo', 'verde',
    ];
}
