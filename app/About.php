<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'mision', 'vision', 'filosofia', 'objetivo', 'ornigrama'
    ];
}
