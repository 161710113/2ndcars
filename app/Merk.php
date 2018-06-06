<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $table = 'merks';
    protected $fillable = array('nama_merk');
    public $timestamp = true;

    public function Merk() {
        return $this->belongsTo('App\Merk', 'id_merk');
    }
}
