<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('Produk_model');
        }

        public function index()
        {
            $data['list'] = $this->Produk_model->list();
            $this->load->view('apotek/index', $data);
        }

        public function etical()
        {
            $data['getEtical'] = $this->Produk_model->getEtical();
            $this->load->view('apotek/etical', $data);
        }

        public function register()
        {
            $this->load->view('apotek/register');
        }

        public function kontak()
        {
            $this->load->view('apotek/kontak');
        }

        public function faq()
        {
            $this->load->view('apotek/faq');
            
        }

        public function profper()
        {
            $this->load->view('apotek/profper');
            
        }

        public function vismis()
        {
            $this->load->view('apotek/vismis');
            
        }

        public function detail()
        {
            $this->load->view('apotek/detail');
        }
    
    }
    
    /* End of file Home.php */
?>