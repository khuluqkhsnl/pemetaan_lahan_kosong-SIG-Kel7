<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as DB;

class Klasifikasi extends Eloquent{

	public function listing()
	{
		$query = DB::table('klasifikasi')
				->join('lahan', 'klasifikasi.id_lokasi', '=', 'lahan.id','LEFT')
            	->select('klasifikasi.*', 'lahan.nama_lokasi')
            	->orderBy('klasifikasi.id','asc')
            	->get();
		return $query;
	}

	public function store($data)
	{
		try{
			DB::table('klasifikasi')->insert([
				'id_lokasi'	=> $data['id_lokasi'],
				'luas_tanah'	=> $data['luas_tanah'],
				'lahan_terpakai'	=> $data['lahan_terpakai'],
				'lahan_tersisa'		=> $data['lahan_tersisa'],

			]);

		} catch(\Throwable $th){
			return 'false';
		}

		return 'true';
	}
} 