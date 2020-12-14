<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $fillable = ['description'];
    protected $casts = [
        'created_at' => 'datetime:H:i:s | d-m-Y',
    ];
}
