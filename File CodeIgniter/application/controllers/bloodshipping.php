<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Bloodshipping extends CI_Controller{
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
        //$this->load->view('home_utd');
    }
    
    public function pengiriman(){
        //$sscc = $this->input->post('kodesscc');
        $tanggal = $this->input->post('tanggal1');
        $waktu = $this->input->post('waktu1');
        $kode = $this->input->post('kodetujuan1');
        $tujuan = $this->input->post('tujuan1');
        $serial = $this->input->post('serial1');
        $suhu = $this->input->post('suhu');
        $petugas = $this->input->post('petugas');
        $itemlist = [];
        $daftarBarang = json_decode($this->input->post('daftarBarang'));


        if (!empty($daftarBarang)) {
            foreach ($daftarBarang as $barang) {
                $obj = new stdClass();
                $obj->idprod = $barang->idprod;
                $obj->nokantung = $barang->nokantung;
                $obj->jenis = $barang->jenis;
                $obj->waktuprod = $barang->waktuprod;
                $obj->expired = $barang->expired;
               
                echo $obj->jenis;
                echo $obj->goldar;
                echo $obj->jumlah;
                array_push($itemlist, $obj);

            }  
        }

        

        $this->load->model('Darah');
        if($this->Darah->pengiriman($tanggal, $waktu, $kode, $tujuan, $serial, $suhu, $petugas, $itemlist)){
            $hasil = 'sukses';
            redirect('bankdarah/pengirimandarah/'. $hasil);
        }
        else{
            $hasil = 'gagal';
            redirect('bankdarah/pengirimandarah/'. $hasil);
        }



    }
    

 }