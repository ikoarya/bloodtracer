<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Cekauth extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function cekauth($id, $pass) {
		$this->db->where('id_pengguna', $id);
		$this->db->where('pass_pengguna', $pass);
		$this->db->select('akses');
		$query = $this->db->get('pengguna');
		if ($query->num_rows() == 0)
			return 0;
		echo "ini numrow ".$query->num_rows()." ";
		return $query->num_rows();
	}


}