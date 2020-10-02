<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    //
    protected $fillable = ['option', 'type', 'question_id'];

    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
