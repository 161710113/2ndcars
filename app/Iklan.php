<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iklan extends Model
{
    protected $table = 'iklans';
    protected $fillable = array('mobil_id');
    public $timestamp = true;

    public function Mobil() {
		return $this->belongsTo('App\Mobil', 'mobil_id');
	}
}
