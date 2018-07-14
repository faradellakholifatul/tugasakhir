<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 987ccd30fb242ed775aa5542cca737eb3677f209
<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class User extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url', 'form');
            $this->load->model('Login_model');
        }

        public function index()
        {
            $session_id = $this->session->userdata('user');
            if(!empty($session_id))
            {
                redirect('apotek/');
            }

            $data['user'] = $session_id;
            $this->load->view('apotek', $data);
        }
    
    }
    
    /* End of file .php */
<<<<<<< HEAD
=======
=======
<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class User extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url', 'form');
            $this->load->model('Login_model');
        }

        public function index()
        {
            $session_id = $this->session->userdata('user');
            if(!empty($session_id))
            {
                redirect('apotek/');
            }

            $data['user'] = $session_id;
            $this->load->view('apotek', $data);
        }
    
    }
    
    /* End of file .php */
>>>>>>> 354f60f97d3490adab61223ac4a1abba7f8db764
>>>>>>> 987ccd30fb242ed775aa5542cca737eb3677f209
    