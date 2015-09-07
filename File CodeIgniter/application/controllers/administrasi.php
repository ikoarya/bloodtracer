<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Administrasi extends CI_Controller{
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
    
    public function daftarbaru($hasil = null){
        if($this->session->userdata('pass_pengguna') == null) {
            redirect(base_url() . 'basecon');
        }
        
        $this->load->model('pendonor');
        $data['id'] = $this->pendonor->ambilmaxid()+1;
        $data['hasil'] = $hasil;

        $this->load->view('daftarbaru', $data);
    }

    public function daftarlama($hasil = null){
        if($this->session->userdata('pass_pengguna') == null) {
            redirect(base_url() . 'basecon');
        }
                
        $this->load->model('pendonor');
        $data['id'] = $this->pendonor->ambilmaxdaftar()+1;
        $data['hasil'] = $hasil;

        $this->load->view('daftarlama', $data);
    }

    public function riwayat(){
        $this->load->view('riwayatdonor');
    }

    
 }