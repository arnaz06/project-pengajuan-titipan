<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table='pengajuans';

    public function unit(){
        return $this->belongsTo('App\Unit');
    }

    public function pengadaan(){
        return $this->hasOne('App\Pengadaan');
    }

}
