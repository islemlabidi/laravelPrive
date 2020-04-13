<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    public function Seances()
    {
        return $this->hasMany('App\Seance');
    }
    public function Admins()
    {
        return $this->belongsTo('App\Admin');
    }
}
