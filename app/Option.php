<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    //
    protected $fillable = ['option', 'type', 'position_id'];

    public function question()
    {
        return $this->belongsTo('App\Question', 'position_id', 'position');
    }
}
