<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $primaryKey = 'position';
    protected $fillable = ['question', 'category', 'position'];

    public function options()
    {
        return $this->hasMany('App\Option', 'position');
    }
}
