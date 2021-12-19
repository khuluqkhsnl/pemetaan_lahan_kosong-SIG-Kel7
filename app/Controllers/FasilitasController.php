<?php

/**
 * 
 */

class FasilitasController extends Controller
{
	protected $fasilitas ;

	public function __construct()
	{
		if($_SESSION['login'] == 'false')
			echo "<script>window.location.href='". $GLOBALS['base_url'] ."';
				</script>";
		$this->tempat 		= $this->model('Tempat');;
		$this->fasilitas = $this->model('Fasilitas');
	}

	public function index()
	{
		$data['fasilitas'] = $this->fasilitas->listing();
		$_SESSION['title'] = 'Fasilitas';
		return $this->view('fasilitas', $data);
	}

	public function create()
	{
		$data['tempat'] 	= $this->tempat->listing();
		$_SESSION['title'] = 'inputfasilitas';
		//var_dump($data);
		return $this->view('inputfasilitas', $data);
	}

	public function store()
	{

		$data = [
				'fasilitas'	=> $_POST['fasilitas'],
				'id_kelurahan'	=> $_POST['id_kelurahan'],
		];

		$model = $this->fasilitas->store($data);

		//header('Location: app/Views/lahan.php'.'Data Berhasil Tersimpan');
		echo "<script type=\"text/javascript\">alert('Data Berhasil Tersimpan');
		window.location='fasilitas';
		</script>";
		
	} 

}