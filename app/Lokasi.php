<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $table = 'lokasis';
    protected $fillable = array('provinsi');
    public $timestamp = true;

    public function Mobil() {
        return $this->hasMany('App\Mobil', 'id_lokasi');
    }
}
