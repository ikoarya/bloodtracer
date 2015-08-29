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
        $tanggal = $this->input->post('tanggal');
        $waktu = $this->input->post('waktu');
        $kode = $this->input->post('kode');
        $tujuan = $this->input->post('tujuan');
        $serial = $this->input->post('serial');
        $suhu = $this->input->post('suhu');
        $petugas = $this->input->post('petugas');

        $this->load->model('Darah');
        if($this->Darah->pengiriman($tanggal, $waktu, $kode, $tujuan, $serial, $suhu, $petugas)){
            echo "berhasil";
        }
        else{
            echo "gagal";
        }



    }
    

 }