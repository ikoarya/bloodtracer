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
					$data = array (
						'nomor_faktur' => $nofaktur,
						'id_kantung' => $item->nomor,
						'id_donor' => $item->kodedonor,
						'jenis' => $item->jenis
					);
					$this->db->insert('detail_faktur', $data);
				}	
			}
			return true;
		}
		else{
			return false;
		}
	}
}