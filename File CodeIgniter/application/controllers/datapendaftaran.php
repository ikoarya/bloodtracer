<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Datapendaftaran extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    

    public function periksadonor(){
        $nopendaf = $this->input->post('nopendaf');
        $kode = $this->input->post('kode1');
        $rhesus = $this->input->post('rhesus');
        $hb = $this->input->post('hb');
        $goldar = $this->input->post('goldar1');
        $bb = $this->input->post('bb');
        $tensi = $this->input->post('tensi');
        $cc = $this->input->post('cc');
        $petugas = $this->input->post('petugas');
        $hasil = $this->input->post('hasil');
        $tanggal = $this->input->post('tanggaldaftar');
        $jml_donor = $this->input->post('jml_donor');

        

        $this->load->model('Pendaftaran');
        $this->load->model('Pendonor');

        if ($this->Pendaftaran->daftardonor($nopendaf, $kode, $rhesus, $hb, $goldar, $bb, $tensi, $cc, $petugas, $hasil)) {
            echo "Berhasil tahap 1";
            
        }
        else{
            echo "gagal cak";
        }

        if($hasil == "Lolos"){
            if ($this->Pendonor->updatetgldonor($kode, $tanggal, $jml_donor, $rhesus)) {
                echo "Berhasil tahap 2";
            }
            else{
                echo "Gagal tahap 2";
            }
        }
    }

    
 }