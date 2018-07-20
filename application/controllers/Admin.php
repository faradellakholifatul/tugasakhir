<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->library('session');
            if($this->session->privilege !='Administrator')
            { 
               redirect('home'); 
            }
        }
		
		//load view admin index
        public function index()
        {
            $this->load->view('admin/index');
        }
    
    }
    
    /* End of file Admin.php */
    
