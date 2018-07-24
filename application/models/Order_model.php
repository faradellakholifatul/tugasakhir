<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Order_model extends CI_Model {
        public function insertOrder()
        {
            $data['status_order'] = 'belum di bayar';
            $data['fk_id_user'] = $this->session->privilege('id');
            $query = $this->db->insert('order', $data);
            return $this->db->insert_id();
        }
    }
    
    /* End of file Order_model.php */
    