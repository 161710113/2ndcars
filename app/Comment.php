<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = array('komentar', 'member_id', 'berita_id');
    public $timestamp = true;

    public function Berita() {
		return $this->belongsTo('App/Berita', 'berita_id');
    }
    public function Member() {
		return $this->belongsTo('App/Member', 'member_id');
	}
}
