<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Kantung extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	
	public function inputKantung($nokantung, $nomorpendaf, $jeniskantung, $tgl, $waktu){
		$data = array (
			'id_kantung' => $nokantung,
			'nomor_donor' => $nomorpendaf,
			'jenis' => $jeniskantung,
			'tanggal_aftap' => $tgl,
			'waktu_aftap' => $waktu
		);
		if($this->db->insert('kantung', $data)){
			return true;
		}
		else{
			return false;
		}
	}

	function ambilkantung($param, $num=0, $rand=false) {
		$this->db->where( 'id_kantung = '.$param );
		if ($rand)
			$this->db->order_by( 'rand()' );
		if ($num != 0)
			$query = $this->db->get('kantung', $num);
		else
			$query = $this->db->get('kantung');
		return $query;
	}

	function updateinfeksi($kode, $petugas, $tanggal, $waktu, $hiv, $sifilis, $hepatitis, $hcv){
		$item = array (
			'petugas_imltd' => $petugas,
			'tanggal_periksa' => $tanggal,
			'waktu_periksa' => $waktu,
			'hiv' => $hiv,
			'sifilis' => $sifilis,
			'hepatitis' => $hepatitis,
			'hcv' => $hcv
		);
		$this->db->where('id_kantung', $kode);
		if ($this->db->update('kantung', $item))
			return true;
		else
			return false;
	}

	function ambilstok($param, $num=0, $rand=false) {
		$this->db->where( "jenis = '$param'" );
		if ($rand)
			$this->db->order_by( 'rand()' );
		if ($num != 0)
			$query = $this->db->get('persediaan_darah', $num);
		else
			$query = $this->db->get('persediaan_darah');
		return $query;
	}
	
}