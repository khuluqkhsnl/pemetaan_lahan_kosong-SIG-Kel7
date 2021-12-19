<?php

use app\Models\Lahan;
/**
 * 
 */

class LahanController extends Controller
{
	

	public function __construct()
	{
		if($_SESSION['login'] == 'false')
			echo "<script>window.location.href='". $GLOBALS['base_url'] ."';
				</script>";
		$this->lahan = $this->model('Lahan');
		$this->tempat 		= $this->model('Tempat');
	}

	public function index()
	{
		$data['lahan'] = $this->lahan->listing();
		$_SESSION['title'] = 'Lahan';
		return $this->view('lahan', $data);
	}

	public function create()
	{
		//$data['lahan'] = $this->lahan->listing();
		$data['tempat'] 	= $this->tempat->listing();
		$_SESSION['title'] = 'inputlahan';
		//var_dump($data);
		return $this->view('inputlahan', $data);
	}

 public function store()
	{

		$data = [
				'nama_lokasi'	=> $_POST['nama_lokasi'],
				'id_kelurahan'	=> $_POST['id_kelurahan'],
				'id_kecamatan'	=> $_POST['id_kecamatan'],
				'latitude'		=> $_POST['latitude'],
				'longitude'		=> $_POST['longitude'],
		];

		$model = $this->lahan->store($data);

		//header('Location: app/Views/lahan.php'.'Data Berhasil Tersimpan');
		echo "<script type=\"text/javascript\">alert('Data Berhasil Tersimpan');
		window.location='lahan';
		</script>";
		
	} 


}