<<<<<<< HEAD
<<<<<<< HEAD
<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->library('session');
            if($this->session->privilege!='Administrator')
            { 
               redirect('login/'); 
            }
        }
        public function index()
        {
            $this->load->view('admin/index');
        }
    
    }
    
    /* End of file Admin.php */
=======
<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->library('session');
            if($this->session->privilege!='Administrator')
            { 
               redirect('login/'); 
            }
        }
        public function index()
        {
            $this->load->view('admin/index');
        }
    
    }
    
    /* End of file Admin.php */
>>>>>>> 0f475ee15e1c9ace9191a4b241aefb2ed68d437f
=======
<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->library('session');
            if($this->session->privilege!='Administrator')
            { 
               redirect('login/'); 
            }
        }
        public function index()
        {
            $this->load->view('admin/index');
        }
    
    }
    
    /* End of file Admin.php */
>>>>>>> 354f60f97d3490adab61223ac4a1abba7f8db764
    