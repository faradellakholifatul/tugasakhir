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

        public function generic()
        {
            $data['getGeneric'] = $this->Produk_model->getGeneric();
            $this->load->view('apotek/generic', $data);
        }

        public function lainnya()
        {
            $data['getLainnya'] = $this->Produk_model->getLainnya();
            $this->load->view('apotek/lainnya', $data);
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

        public function history()
        {
            $this->load->view('apotek/historiorder');
            
        }

        public function detail($id_produk)
        {
            $produk = $this->Produk_model->show($id_produk);
            $data = ['data' => $produk];
            $data['kategori'] = $this->Produk_model->get_kategori();
            $this->load->view('apotek/detail', $data);
        }
    
        public function basket($id_produk)
        {
            /*$produk = $this->Produk_model->show($id_produk);
            $data = ['data' => $produk];
            $data['kategori'] = $this->Produk_model->get_kategori();
            $this->load->view('apotek/basket', $data);*/
            $kategori  = $this->Produk_model->get_kategori();
            $data = [
                'list' => $this->Produk_model->list(),
                'kategori' => $kategori];
            $this->load->view('apotek/basket', $data);
        }
    }
    
    /* End of file Home.php */
?>