<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Darah extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function permintaan($nomor, $tanggal, $kode, $tujuan, $petugas, $itemlist) {
		$data = array (
			'noform' => $nomor,
			'tglpermintaan' => $tanggal,
			'koders' => $kode,
			'tujuan' => $tujuan,
			'petugas' => $petugas
		);
		if ($this->db->insert('permintaan', $data)) {
			
			if (!empty($itemlist)) {
				foreach ($itemlist as $item) {
					$data = array (
						'noform' => $nomor,
						'jenisreq' => $item->jenis,
						'goldarreq' => $item->goldar,
						'jumlahreq' => $item->jumlah
					);
					$this->db->insert('detail_permintaan', $data);
				}	
			}
			/*
			if (!empty($daftarBarang)) {
				foreach ($daftarBarang as $item) {
					$data = array (
						'noform' => $nomor,
						'jenisreq' => $item->jenis,
						'goldarreq' => $item->goldar,
						'jumlahreq' => $item->jumlah
					);
					$this->db->insert('detail_permintaan', $data);
				}	
			}*/
			
			return true;
		}
		else{
			return false;
		}
	}


	function listpermintaan(){
		$query = $this->db->get( 'permintaan' );
		return $query;
	}

	function detailpermintaan(){
		$query = $this->db->get( 'detail_permintaan' );
		return $query;
	}

	function ceksscc(){
		$query = $this->db->get( 'produksi' );
		return $query;	
	}

	function pengiriman($tanggal, $waktu, $kode, $tujuan, $serial, $suhu, $petugas){
		$data = array (
			'sscc' => $serial,
			'status' => "Baik",
			'waktu_kirimship' => $tanggal,
			'kode_tujuan' => $kode,
			'petugas_kirimship' => $petugas,
			'suhu_kirim' => $suhu,
		);

		if($this->db->insert('shipping', $data)){
			return true;
		}
		else{
			return false;
		}
	}

	
}