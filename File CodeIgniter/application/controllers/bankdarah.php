<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Bankdarah extends CI_Controller{
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
    
    public function penelusuran(){
        $this->load->view('penelusurankantung');
    }

    public function karantina(){
        $this->load->view('formkarantina');
    }

    public function cekpersediaan(){
        $this->load->view('cekpersediaan');
    }

    public function pengirimandarah(){
        $this->load->model('darah');
        $data['list'] = $this->darah->ceksscc();
        $this->load->view('pengirimandarah', $data);

    }

    public function permintaanrs(){
        $this->load->view('permintaanrs');
    }
    
    public function permintaanbd(){
        $this->load->view('permintaanbd');
    }
    public function lihatpermintaan(){
        $this->load->model('darah');
        $data['list'] = $this->darah->listpermintaan();
        //$ini = $this->darah->detailpermintaan();
        $data['detaillist'] = $this->darah->detailpermintaan();

        
        
        $this->load->view('lihatpermintaan', $data);
    }
 }