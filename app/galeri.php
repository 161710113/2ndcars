<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeris';
    protected $fillable = array('foto', 'id_mobil');
    public $timestamp = true;

    public function Mobil() {
        return $this->belongsTo('App\Mobil', 'id_mobil');
  }
}
