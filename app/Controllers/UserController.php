<?php

/**
 * 
 */

error_reporting(error_reporting() & ~E_NOTICE);

class UserController extends Controller
{
	protected $User ;

	public function __construct()
	{
		$this->user  = $this->model('User');
	}

	public function index()
	{	
		if($_SESSION['login'] == 'true')
			echo "<script>window.location.href='". $GLOBALS['base_url'] ."dashboard';
			</script>";
		else{
			$_SESSION['title'] 	= 'Login';
			return $this->view('login');
		}
	}

	public function storelogin()
	{
		$data = [
				'nama'	=> $_POST['nama'],
				'password'	=> $_POST['password'],
				];
		
		$model = $this->user->login($data);
		// var_dump($model);
		if ($model != null) {
			$_SESSION['login'] = 'true';
			$_SESSION['role']  = $model->role;

			echo "<script type=\"text/javascript\">alert('Berhasil Login');
				window.location='". $GLOBALS['base_url'] ."dashboard';
				</script>";
		}
		else{
			
			echo "<script type=\"text/javascript\">alert('Gagal Login');
			window.location='". $GLOBALS['base_url'] ."';
			</script>";
		}
	}

	public function logout()
	{
		$_SESSION['login'] = 'false';
		echo "<script type=\"text/javascript\">alert('Anda telah logout');
			window.location='". $GLOBALS['base_url'] ."';
			</script>";
	}
}