<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Aftap extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    
    public function index(){
        if($this->session->userdata('pass_pengguna') == null) {
            redirect(base_url() . 'basecon');
        }
        else {
            $this->load->view('home_utd');
        }
    }
    
    public function formaftap(){
        $this->load->model('Darah');
        $data['id'] = $this->Darah->ambilmaxaftap()+1;

        $this->load->view('formaftap', $data);
    }

    public function buatfaktur(){
        $this->load->model('Faktur');
        $data['id'] = $this->Faktur->ambilmaxfaktur()+1;

        $this->load->view('pembuatanfaktur', $data);
    }


    public function submitform(){
        $noaftap = $this->input->post('noaftap1');
        $nokantung = $this->input->post('nokantung');
        $nomorpendaf = $this->input->post('nomorpendaf');
        $jeniskantung = $this->input->post('jeniskantung');
        $goldar = $this->input->post('goldar');
        $rhesus = $this->input->post('rhesus');
        $tgl = $this->input->post('tgl1');
        $waktu = $this->input->post('waktu1');
        $asal = $this->input->post('asal');
        $sampel1 = $this->input->post('sampel1');
        $petugas = $this->input->post('petugas');
        $keterangan = $this->input->post('keterangan');

        $this->load->model('Darah');
        $this->load->model('Kantung');

        if($this->Darah->inputAftap($noaftap, $nomorpendaf, $nokantung, $jeniskantung, $asal, $tgl, $waktu, $petugas, $keterangan)){
            echo "Berhasil coy";
        }
        else{
            echo "Gagal";
        }

        if($this->Kantung->inputKantung($nokantung, $nomorpendaf, $jeniskantung, $tgl, $waktu)){
            echo "Berhasil tahap 2";
        }
        else{
            echo "gagal tahap 2";
        }

    }

    public function submitfaktur(){
        $nofaktur = $this->input->post('nofaktur1');
        $tanggal = $this->input->post('tanggal1');
        $waktu = $this->input->post('waktu1');
        $asal = $this->input->post('asal');
        $petugas = $this->input->post('petugas');

        $itemlist = [];
        $daftarsubmit = json_decode($this->input->post('daftarsubmit'));

        if (!empty($daftarsubmit)) {
            foreach ($daftarsubmit as $barang) {
                $obj = new stdClass();
                $obj->nomor = $barang->nomor;
                $obj->kodedonor = $barang->kodedonor;
                $obj->jenis = $barang->jenis;
               
                echo $obj->nomor;
                echo $obj->kodedonor;
                echo $obj->jenis;
                array_push($itemlist, $obj);

            }  
        }

        $this->load->model('Faktur');
        if($this->Faktur->pembuatanfaktur($nofaktur, $tanggal, $waktu, $asal, $petugas, $itemlist)){
            echo "berhasil tahap 1";
        }
        else{
            echo "gagal tahap 1";
        }

        






    }

   
 }