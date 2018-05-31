<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = array('nama');
    public $timestamp = true;

    public function Member() {
		return $this->belongsToMany('App/Member', 'Member_role', 'member_id', 'role_id');
	}
}
