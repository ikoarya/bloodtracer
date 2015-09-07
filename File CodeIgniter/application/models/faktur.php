<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Faktur extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function ambilmaxfaktur(){
		$this->db->select_max('id_faktur');
		$query = $this->db->get('faktur');
		return $query->row()->id_faktur;
	}

	public function pembuatanfaktur($nofaktur, $tanggal, $waktu, $asal, $petugas, $itemlist){
		$data = array (
			'nomor_faktur' => $nofaktur,
			'tgl_kirim' => $tanggal,
			'waktu_kirim' => $waktu,
			'asal_darah' => $asal,
			'petugas_kirim' => $petugas
		);
		if ($this->db->insert('faktur', $data)) {
			
			if (!empty($itemlist)) {
				foreach ($itemlist as $item) {
					$nokantung = $item->nomor;
					$data = array (
						'nomor_faktur' => $nofaktur,
						'id_kantung' => $item->nomor,
						'id_donor' => $item->kodedonor,
						'jenis' => $item->jenis
					);
					$this->db->insert('detail_faktur', $data);

					$this->db->where('id_kantung', $nokantung);
					$datas = array(
						'id_faktur' => $nofaktur
						);
					$this->db->update('kantung', $datas);
				}	
			}
			return true;
		}
		else{
			return false;
		}
	}

	public function ambildetail($param, $num=0, $rand=false){
		$this->db->where( 'nomor_faktur = '.$param );
		if ($rand)
			$this->db->order_by( 'rand()' );
		if ($num != 0)
			$query = $this->db->get('detail_faktur', $num);
		else
			$query = $this->db->get('detail_faktur');
		return $query;
	}

	function updateFaktur($kode, $petugas, $tanggal, $waktu){
		$item = array (
			'tgl_terima' => $tanggal,
			'waktu_terima' => $waktu,
			'petugas_terima' => $petugas
		);
		$this->db->where('nomor_faktur', $kode);
		if ($this->db->update('faktur', $item))
			return true;
		else
			return false;
	}

}