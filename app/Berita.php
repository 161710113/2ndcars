<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'beritas';
    protected $fillable = array('gambar', 'judul', 'isi');
    public $timestamp = true;
  
}
