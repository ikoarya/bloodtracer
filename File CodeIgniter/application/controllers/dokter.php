<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Dokter extends CI_Controller{
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
    
    public function periksadonor($hasil = null){
        if($this->session->userdata('pass_pengguna') == null) {
            redirect(base_url() . 'basecon');
        }      

        $data['hasil'] = $hasil;
        $this->load->view('pemeriksaandonor', $data);
    }


    public function riwayat($hasil = null){
        if($this->session->userdata('pass_pengguna') == null) {
            redirect(base_url() . 'basecon');
        }

        $data['hasil'] = $hasil;
        $this->load->view('riwayatdonordokter', $data);
    }

    
 }