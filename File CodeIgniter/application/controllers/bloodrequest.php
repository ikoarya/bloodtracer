<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Bloodrequest extends CI_Controller{
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
    
    public function permintaan(){
        $nomor = $this->input->post('nomor');
        $tanggal = $this->input->post('tanggal');
        $kode = $this->input->post('kode');
        $tujuan = $this->input->post('tujuan');
        $petugas = $this->input->post('petugas');
        $itemlist = [];
        $daftarBarang = json_decode($this->input->post('daftarBarang'));

        if (!empty($daftarBarang)) {
            foreach ($daftarBarang as $barang) {
                $obj = new stdClass();
                $obj->jenis = $barang->jenis;
                $obj->goldar = $barang->goldar;
                $obj->jumlah = $barang->jumlah;
               
                echo $obj->jenis;
                echo $obj->goldar;
                echo $obj->jumlah;
                array_push($itemlist, $obj);

            }  
        }
        

        $this->load->model('Darah');
        if($this->Darah->permintaan($nomor, $tanggal, $kode, $tujuan, $petugas, $itemlist)){
            echo "berhasil";
        }
        else{
            echo "gagal";
        }
        
    }

 }