<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Optionnina extends Model
{
    //
    protected $fillable = ['option', 'type', 'position_id'];

    public function question()
    {
        return $this->belongsTo('App\Questionnina', 'position_id', 'position');
    }
}
