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

  
}

/* End of file ajax.php */
/* Location: ./application/controllers/ajax.php */
