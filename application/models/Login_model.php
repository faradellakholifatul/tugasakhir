<<<<<<< HEAD
<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login_model extends CI_Model {
    
        public function login($username, $password)
        {
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            return $this->db->get()->row();
        }
    
    }
    
    /* End of file Login_model.php */
=======
<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login_model extends CI_Model {
    
        public function login($username, $password)
        {
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            return $this->db->get()->row();
        }
    
    }
    
    /* End of file Login_model.php */
>>>>>>> 354f60f97d3490adab61223ac4a1abba7f8db764
    