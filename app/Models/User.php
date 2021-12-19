<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as DB;

class User extends Eloquent{

	public function login($data){

		$query = DB::table('user')
            	->where('nama', $data['nama'])
            	->where('password', $data['password'])
            	->first();
		return $query;
	}
	
} 