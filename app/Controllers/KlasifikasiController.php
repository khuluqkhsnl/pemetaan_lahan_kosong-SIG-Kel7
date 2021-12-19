<?php

/**
 * 
 */

class KlasifikasiController extends Controller
{
	protected $klasifikasi ;

	public function __construct()
	{
		if($_SESSION['login'] == 'false')
			echo "<script>window.location.href='". $GLOBALS['base_url'] ."';
				</script>";
		$this->lahan = $this->model('Lahan');
		$this->klasifikasi = $this->model('Klasifikasi');
	}

	public function index()
	{
		$data['klasifikasi'] = $this->klasifikasi->listing();
		$_SESSION['title'] = 'Klasifikasi Lahan';
		return $this->view('klasifikasi', $data);
	}

	public function create()
	{
		$data['lahan'] = $this->lahan->listing();
		$_SESSION['title'] = 'inputklasifikasi';
		//var_dump($data);
		return $this->view('inputklasifikasi', $data);
	}

	public function store()
	{

		$data = [
				'id_lokasi'	=> $_POST['id_lokasi'],
				'luas_tanah'	=> $_POST['luas_tanah'],
				'lahan_terpakai'	=> $_POST['lahan_terpakai'],
				'lahan_tersisa'	=> $_POST['lahan_tersisa'],
		];

		$model = $this->klasifikasi->store($data);

		//header('Location: app/Views/lahan.php'.'Data Berhasil Tersimpan');
		echo "<script type=\"text/javascript\">alert('Data Berhasil Tersimpan');
		window.location='klasifikasi';
		</script>";
		
	} 
}