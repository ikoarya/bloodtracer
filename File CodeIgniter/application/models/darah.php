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

	function pengiriman($tanggal, $waktu, $kode, $tujuan, $serial, $suhu, $petugas, $itemlist){
		$data = array (
			'sscc' => $serial,
			'status' => "Baik",
			'waktu_kirimship' => $tanggal,
			'kode_tujuan' => $kode,
			'petugas_kirimship' => $petugas,
			'suhu_kirim' => $suhu
		);

		if($this->db->insert('shipping', $data)){
			if (!empty($itemlist)) {
				foreach ($itemlist as $item) {
					$data = array (
						'sscc' => $serial,
						'id_produksi' => $item->idprod,
						'id_kantung' => $item->nokantung
					);
					$this->db->insert('detail_pengiriman', $data);
				}	
			}

			return true;
		}
		else{
			return false;
		}
	}

	public function ambilmaxaftap(){
		$this->db->select_max('id_aftap');
		$query = $this->db->get('aftap');
		return $query->row()->id_aftap;
	}

	public function inputAftap($noaftap, $nomorpendaf, $nokantung, $jeniskantung, $asal, $tgl, $waktu, $petugas, $keterangan){
		$data = array (
			'no_aftap' => $noaftap,
			'nomor_donor' => $nomorpendaf,
			'id_kantung' => $nokantung,
			'jenis_kantung' => $jeniskantung,
			'asal_darah' => $asal,
			'tanggal_aftap' => $tgl,
			'waktu_aftap' => $waktu,
			'petugas_aftap' => $petugas,
			'keterangan' => $keterangan
		);
		if($this->db->insert('aftap', $data)){
			return true;
		}
		else{
			return false;
		}
	}

	public function tambahproduksi($barcodeprod, $nokantung, $jenisdarah, $waktu, $expired, $petugas){
		$data = array (
			'barcode_produksi' => $barcodeprod,
			'id_kantung' => $nokantung,
			'jenis_komponen' => $jenisdarah,
			'waktu_produksi' => $waktu,
			'waktu_kadaluarsa' => $expired,
			'petugas_produksi' => $petugas		
		);
		if($this->db->insert('produksi', $data)){
			return true;
		}
		else{
			return false;
		}
	}

	public function ambilproduksi($param, $num=0, $rand=false){
		$this->db->where( 'barcode_produksi = '.$param );
		if ($rand)
			$this->db->order_by( 'rand()' );
		if ($num != 0)
			$query = $this->db->get('produksi', $num);
		else
			$query = $this->db->get('produksi');
		return $query;
	}

	public function ambilaftap($param, $num=0, $rand=false){
		$this->db->where( 'id_kantung = '.$param );
		if ($rand)
			$this->db->order_by( 'rand()' );
		if ($num != 0)
			$query = $this->db->get('aftap', $num);
		else
			$query = $this->db->get('aftap');
		return $query;
	}


	public function tambahpersediaan($jenis, $golongan){
		

		$this->db->select_max('jumlah');

		$query = $this->db->get('persediaan_darah');
		$hasil = $query->row()->jumlah+1;

		$item = array (
			'jumlah' => $hasil
		);

		$this->db->where('jenis', $jenis);
		$this->db->where('golongan_darah', $golongan);
		
		if ($this->db->update('persediaan_darah', $item))
			return true;
		else
			return false;
	}
	
	public function ambilmaxkirim(){
		$this->db->select_max('id_pengiriman');
		$query = $this->db->get('shipping');
		return $query->row()->id_pengiriman;
	}

	public function lihatpermintaan($param, $num=0, $rand=false){
		$this->db->where( 'noform = '.$param );
		if ($rand)
			$this->db->order_by( 'rand()' );
		if ($num != 0)
			$query = $this->db->get('detail_permintaan', $num);
		else
			$query = $this->db->get('detail_permintaan');
		return $query;
	}

}