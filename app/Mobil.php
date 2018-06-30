<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobils';
    protected $fillable = array('plat_nomor', 'nama_mobil', 'transmisi','no_hp','harga','deskripsi',
                                    'id_merk','id_tipe','id_lokasi','id_user','foto','status');
    public $timestamp = true;

    public function Galeri() {
        return $this->hasMany('App\Galeri', 'id_mobil');
    }
    public function Merk() {
        return $this->belongsTo('App\Merk', 'id_merk');
    }
    public function Tipe() {
        return $this->belongsTo('App\Tipe', 'id_tipe');
    }
    public function Lokasi() {
        return $this->belongsTo('App\Lokasi', 'id_lokasi');
    }
    public function User() {
        return $this->belongsTo('App\User', 'id_user');
    }
}
