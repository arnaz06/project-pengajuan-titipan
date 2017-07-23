<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengadaan extends Model
{
    protected $table='pengadaans';

    public function pengajuan(){
        return $this->belongsTo('App\Pengajuan');
    }
}
