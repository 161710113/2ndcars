<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $table = 'galeris';
    protected $fillable = array('foto', 'mobil_id');
    public $timestamp = true;

    public function Iklan() {
        return $this->belongsTo('App/Mobil', 'mobil_id');
  }
}
