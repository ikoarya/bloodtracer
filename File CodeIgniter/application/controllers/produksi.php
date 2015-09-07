<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Produksi extends CI_Controller{
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
    
    public function terimafaktur($hasil = null){
       
        $data['hasil'] = $hasil;
        $this->load->view('terimafakturproduksi', $data);
    }

    public function produksidarah($hasil = null){
        $data['hasil'] = $hasil;
        $this->load->view('produksidarah', $data);
    }

    public function telusurkantung(){
        $this->load->view('penelusurankantung');
    }

    public function tambahproduksi(){
        $barcodeprod = $this->input->post('barcode1');
        $nokantung = $this->input->post('nokantung');
        $jenisdarah = $this->input->post('jenisdarah');
        $waktu = $this->input->post('waktu1');
        $expired = $this->input->post('expired1');
        $petugas = $this->input->post('petugas');

        $this->load->model('Darah');
        if ($this->Darah->tambahproduksi($barcodeprod, $nokantung, $jenisdarah, $waktu, $expired, $petugas)) {
            $hasil = 'sukses';
            redirect('produksi/produksidarah/'. $hasil);
        }
        else{
            $hasil = 'gagal';
            redirect('produksi/produksidarah/'. $hasil);
        }

    }

    
 }