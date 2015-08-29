<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Basecon extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		$this->load->model('ceklogin');
	}

	public function index()
	{
		//echo "asdasdas";
		//echo $this->session->userdata('pass_pengguna');
		//var_dump($this->session->userdata('pass_pengguna'));
		//$this->session->sess_destroy();
		//exit();
		if($this->session->userdata('pass_pengguna') == null) {
			$this->do_login();
		}
		else {
			redirect(base_url() . 'home');
		}

	}

	public function do_login(){
		$username = $this->input->post('username');
		$pass = $this->input->post('password');

		//$result = $this->ceklogin->validasi($username,$pass);
		if($username && $pass){
			if($this->ceklogin->validasi($username, $pass) == true){
			$newdata = array(
				'id_pengguna'  => $username,
				'pass_pengguna'  => $pass,
				'logged_in' => true
			);
			//var_dump($newdata);			
			
			$this->session->set_userdata($newdata);
			//var_dump($this->session->userdata);
			//exit();
			redirect('home');
			}
			else
			{
				$awal = base_url();
				redirect($awal);
			}
		}
		else{
			$this->load->view('login');
		}
		

		/*
		if(!$result){
			$awal = base_url();
			redirect($awal);
		}
		else{
			$data = array(
				'id_pengguna' => $row->id_pengguna,
				'nama_pengguna'=> $row->nama_pengguna,
				'akses' => $row->akses,
				'validated' => true
				);
			$this->session->set_userdata($data);

			redirect('home');
		}*/
	}

}
