<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Pendonor extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function ambilmaxid(){
		$this->db->select_max('nomor_donor');
		$query = $this->db->get('donor');
		return $query->row()->nomor_donor;
	}

	public function ambilmaxdaftar(){
		$this->db->select_max('id_daftar');
		$query = $this->db->get('pendaftaran');
		return $query->row()->id_daftar;
	}

	public function ambilantrian($dateNow){
		$sql = "SELECT COUNT(id_daftar) FROM pendaftaran WHERE tanggaldaftar = ?";
		$query = $this->db->query($sql , array($dateNow));

		return $query->num_rows();
	}


	public function tambahpendonor($kode, $namapendonor, $tanggallahir, $tempatlahir, $jeniskelamin, $agama, $pekerjaan, $golongandarah, $alamat, $kodepos, $wilayah, $noid, $jenisidentitas)
	{

		if($kode == "0"){
			return 0;
		}
		
		$data = array (
			'nomor_donor' => $kode,
			'nama' => $namapendonor,
			'jenis_kelamin' => $jeniskelamin,
			'agama' => $agama,
			'tanggal_lahir' => $tanggallahir,
			'tempat_lahir' => $tempatlahir,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat,
			'kodepos' => $kodepos,
			'wilayah' => $wilayah,
			'golongan_darah' => $golongandarah,
			'noid' => $noid,
			'jenid' => $jenisidentitas
		);
		
		if ($this->db->insert('donor', $data)) {
			$data['hasil'] = "1";
			return $data;
		}
		else{
			return false;
		}

	}

	public function daftardonor($nopendaf, $kode, $tanggal, $waktu){
		$data = array(
			'no_pendaftaran' => $nopendaf,
			'nomor_donor' => $kode,
			'tanggaldaftar' => $tanggal,
			'waktudaftar' => $waktu
			 );

		if($this->db->insert('pendaftaran', $data)){
			return true;
		}
		else{
			return false;
		}
	}

	function ambildata(){
		$query = json_encode($this->db->get( 'donor' ));
		return $query;
	}

	function ambilriwayat($param, $num=0, $rand=false) {
		$this->db->where( 'nomor_donor = '.$param );
		if ($rand)
			$this->db->order_by( 'rand()' );
		if ($num != 0)
			$query = $this->db->get('donor', $num);
		else
			$query = $this->db->get('donor');
		return $query;
	}


	function ambilgoldar($param, $num=0, $rand=false) {
		$this->db->where( 'nomor_donor = '.$param );
		if ($rand)
			$this->db->order_by( 'rand()' );
		if ($num != 0)
			$query = $this->db->get('donor', $num);
		else
			$query = $this->db->get('donor');
		return $query;
	}

	function updatetgldonor($kode, $tanggal, $jml_donor){
		$item = array (
			'jml_donor' => $jml_donor,
			'terakhir_donor' => $tanggal
		);
		$this->db->where('nomor_donor', $kode);
		if ($this->db->update('donor', $item))
			return true;
		else
			return false;
	}
	
}