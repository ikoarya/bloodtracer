<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Datapendonor extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    
    public function tambahbaru(){
        $kode = $this->input->post('kodependonor');
        $namapendonor = $this->input->post('namapendonor');
        $tanggallahir = $this->input->post('tanggallahir');
        $tempatlahir = $this->input->post('tempatlahir');
        $jeniskelamin = $this->input->post('jeniskelamin');
        $agama = $this->input->post('agama');
        $pekerjaan = $this->input->post('pekerjaan');
        $golongandarah = $this->input->post('golongandarah');
        $alamat = $this->input->post('alamat');
        $kodepos = $this->input->post('kodepos');
        $wilayah = $this->input->post('wilayah');
        $noid = $this->input->post('noid');
        $jenisidentitas = $this->input->post('jenisidentitas');

        $this->load->model('Pendonor');
        if($this->Pendonor->tambahpendonor($kode, $namapendonor, $tanggallahir, $tempatlahir, $jeniskelamin, $agama, $pekerjaan, $golongandarah, $alamat, $kodepos, $wilayah, $noid, $jenisidentitas)){

            $data['id'] = $this->Pendonor->ambilmaxid()+1;
            $data['hasil'] = "1";
            $this->load->view('daftarbaru', $data);
        }

        else{
            echo "Gagal";
        }


    }

    
 }