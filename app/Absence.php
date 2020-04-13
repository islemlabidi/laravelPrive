<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    //
    public $timestamps = false;


    public function Seances()
    {
        return $this->hasMany('App\Seance');
    }
}
