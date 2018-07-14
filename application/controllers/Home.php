<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        }

        public function index()
        {
            $this->load->view('apotek/index');
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
    
    }
    
    /* End of file Home.php */
?>