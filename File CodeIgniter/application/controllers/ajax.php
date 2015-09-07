<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

  /* default */
  public function index()	{
  }
  
  public function ambilriwayat($kode){
    $this->load->model('Pendonor');
    $query = $this->Pendonor->ambilriwayat($kode);
    echo json_encode($query->result());
  }

  public function ambilantrian($dateNow){
    $this->load->model('Pendonor');
    $query = $this->Pendonor->ambilantrian($dateNow)+1;
    echo $query; 
  }

  public function ambilkodedonor($kode){
    $this->load->model('Pendaftaran');
    $query = $this->Pendaftaran->ambilkodedonor($kode);
    echo json_encode($query->result());
  }

  public function tambahdetail($kode){
    $this->load->model('Kantung');
    $query = $this->Kantung->ambilkantung($kode);
    echo json_encode($query->result());
  }

  public function ambildetailfaktur($kode){
    $this->load->model('Faktur');
    $query = $this->Faktur->ambildetail($kode);
    echo json_encode($query->result());
  }

  public function ambilproduksi($kode){
    $this->load->model('Darah');
    $query = $this->Darah->ambilproduksi($kode);
    echo json_encode($query->result());
  }

  public function ambilaftap($kode){
    $this->load->model('Darah');
    $query = $this->Darah->ambilaftap($kode);
    echo json_encode($query->result());
  }

  public function ambilpersediaan($kode=NULL){
    $nilai = $this->input->post('jenis');
    $this->load->model('Kantung');
    $query = $this->Kantung->ambilstok($nilai);
    echo json_encode($query->result_array());
  }
 
}

/* End of file ajax.php */
/* Location: ./application/controllers/ajax.php */
