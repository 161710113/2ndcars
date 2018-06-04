<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $table = 'merks';
    protected $fillable = array('nama', 'deskripsi');
    public $timestamp = true;

    public function Mobil() {
		  return $this->hasMany('App/Mobil', 'merk_id');
	}
}
