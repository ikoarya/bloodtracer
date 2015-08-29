<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Ceklogin extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function validasi($username,$pass){
		
		$hasil = $this->db->query("select * from pengguna where id_pengguna = '$username' and pass_pengguna = '$pass'");
    	if($hasil->num_rows() > 0)
    	{
    		return true;
    	}
    	else{
    		return false;
    	}


    	/*
		$this->db->where('id_pengguna', $username);
		$this->db->where('pass_pengguna', $pass);

		$query = $this->db->get('pengguna');

		if($query->num_rows() == 1){
			$row = $query->row();
			return true;
		}

		return false;*/
	}


}