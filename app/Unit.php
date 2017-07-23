<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table='units';

    public function pengajuan(){
        return $this->hasMany('App\Pengajuan');
    }

}
