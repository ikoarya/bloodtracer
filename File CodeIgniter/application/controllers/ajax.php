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
 
}

/* End of file ajax.php */
/* Location: ./application/controllers/ajax.php */
