<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Imltd extends CI_Controller{
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
    
    public function pemeriksaanimltd($hasil = null){
        $data['hasil'] = $hasil;
        $this->load->view('pemeriksaaninfeksi', $data);
    }

    public function terimafaktur($hasil = null){
        $data['hasil'] = $hasil;
        $this->load->view('terimafakturimltd', $data);
    }

    public function submitinfeksi(){
        $kode = $this->input->post('kodesampel');
        $petugas = $this->input->post('petugas');
        $tanggal = $this->input->post('tanggal1');
        $waktu = $this->input->post('waktu1');
        $hiv = $this->input->post('hiv');
        $sifilis = $this->input->post('sifilis');
        $hepatitis = $this->input->post('hepatitis');
        $hcv = $this->input->post('hcv');

        $this->load->model('Kantung');
        if($this->Kantung->updateinfeksi($kode, $petugas, $tanggal, $waktu, $hiv, $sifilis, $hepatitis, $hcv)){
            $hasil = 'sukses';
            redirect('imltd/pemeriksaanimltd/'. $hasil);
        }
        else{
            $hasil = 'gagal';
            redirect('imltd/pemeriksaanimltd/'. $hasil);
        }

    }

    public function submitterimafaktur(){
        $kode = $this->input->post('kode');
        $petugas = $this->input->post('petugas');
        $tanggal = $this->input->post('tanggal1');
        $waktu = $this->input->post('waktu1');

        //echo $kode." ".$petugas." ".$tanggal." ".$waktu;

        $this->load->model('Faktur');
        if($this->Faktur->updateFaktur($kode, $petugas, $tanggal, $waktu)){
            $hasil = 'sukses';
            redirect('imltd/terimafaktur/'. $hasil);
        }
        else{
            $hasil = 'gagal';
            redirect('imltd/terimafaktur/'. $hasil);
        }

    }
    
   
 }