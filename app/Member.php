<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable = array('foto', 'alamat', 'user_id');
    public $timestamp = true;

    public function Mobil() {
        return $this->hasMany('App\Mobil', 'member_id');
    }
    public function Comment() {
        return $this->hasMany('App\Comment', 'member_id');
    }
    // public function Role() {
	// 	return $this->belongsToMany('App\Role', 'Member_role', 'member_id', 'role_id');
	// }
}
