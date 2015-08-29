<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masuk extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	/* default */
	public function index()	{
		/*
		echo md5('secret-of-life');
		echo '<br/>';
		echo md5('ngene');
		*/

		echo $this->session->userdata('akses');
		if($this->session->userdata('akses') == null) {
			$this->login();
		}
		else if ($this->session->userdata('akses') == 1) {
			redirect('localhost/administrasi');
		}
		
	}

	public function login() {

		
		$this->load->model('cekauth');

		$id = $this->input->post('username');
		$pass = $this->input->post('password');



		
		if ($id && $pass) {
			echo "ini";
		echo $id;
		echo $pass;
			$akun = $this->cekauth->cekauth($id, $pass);
			echo $akun;
			/*
			if ($akun != 1) {
				//$userdata = array('id_pengguna' => $id, 'akses' => $akun->hak_akses);
				//$this->session->set_userdata($userdata);
				$this->index();
			}
			else {
				$data = array ('alert_msg' => 'ID atau kata sandi salah', 'alert_class' => 'alert-danger');
				$this->load->view('login', $data);
			}*/
		}
		else {
			$this->load->view('login');
		}
	}


	/* logout */
	public function keluar() {
		$this->session->unset_userdata('hak_akses');
		$this->session->unset_userdata('id');
		$this->masuk();
	}
}


/* End of file beranda.php */
/* Location: ./application/controllers/beranda.php */
