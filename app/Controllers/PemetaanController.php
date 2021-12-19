<?php

/**
 * 
 */

class PemetaanController extends Controller
{
	protected $lahan ;
	protected $tempat ;
	protected $fasilitas ;

	public function __construct()
	{
		if($_SESSION['login'] == 'false')
			echo "<script>window.location.href='". $GLOBALS['base_url'] ."';
				</script>";
		$this->lahan  		= $this->model('Lahan');
		$this->tempat 		= $this->model('Tempat');
		$this->fasilitas 	= $this->model('Fasilitas');
	}

	public function index()
	{
		$data['lahan']  	= $this->lahan->pemetaan();
		$data['tempat'] 	= $this->tempat->listing();
		$data['fasilitas'] 	= $this->fasilitas->listing();
		$_SESSION['title'] 	= 'Pemetaan Lahan Kosong';
		return $this->view('pemetaan', $data);
	}
}