<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnina extends Model
{
    //
    protected $primaryKey = 'position';
    protected $fillable = ['question', 'category', 'position'];

    public function option()
    {
        return $this->hasMany('App\Optionnina', 'position');
    }
}
