<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Laporan extends CI_Controller {
    
        public function __construct()
        {
            parent ::__construct();
            $this->load->library('pdf');
            $this->load->model('Admin_model');
            
        }

        public function index()
        {
            $order = $this->Admin_model->getData();
            $data = [
                "title" => "Order",
                "order" => $order
            ];

            $this->pdf->setPaper('A4', 'portrait');
            $this->pdf->load_view('laporan', $data, 'laporan-contoh.pdf');
        }

        public function html()
        {
            $order = $this->Admin_model->getData();
            $data = [
                "title" => "Order",
                "order" => $order
            ];

            $this->load->view('laporan', $data);
            
        }
    
    }
    
    /* End of file Laporan.php */
    