<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Pendaftaran extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	

	function ambilkodedonor($param, $num=0, $rand=false) {
		$this->db->where( 'no_pendaftaran = '.$param );
		if ($rand)
			$this->db->order_by( 'rand()' );
		if ($num != 0)
			$query = $this->db->get('pendaftaran', $num);
		else
			$query = $this->db->get('pendaftaran');
		return $query;
	}

	function daftardonor($nopendaf, $kode, $rhesus, $hb, $goldar, $bb, $tensi, $cc, $petugas, $hasil){
		$item = array (
			'rhesus' => $rhesus,
			'hb' => $hb,
			'bb' => $bb,
			'tensi' => $tensi,
			'volume' => $cc,
			'petugas' => $petugas,
			'hasil' => $hasil
		);
		$this->db->where('no_pendaftaran', $nopendaf);
		if ($this->db->update('pendaftaran', $item))
			return true;
		else
			return false;
	}

	
}