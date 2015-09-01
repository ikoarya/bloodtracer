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
}

/* End of file ajax.php */
/* Location: ./application/controllers/ajax.php */
