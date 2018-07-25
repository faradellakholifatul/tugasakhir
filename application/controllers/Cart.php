<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Cart extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->library('cart');
        }

        public function index()
        {
            if(count($this->cart->contents()) == 0){
                echo '<script>alert("Cart Kosong Kembali Ke Halaman Awal")</script>';
                redirect('home','refresh');
            }
            $this->load->view('apotek/basket');
        }

        public function insert_cart($id)
        {
            $res = $this->db->where("id_produk",$id)->get("produk")->row();
            $data = array(
                'id'      => $res->id_produk,
                'qty'   => 1,
                'price'    => $res->harga,
                'name'     => $res->nama_produk
            );
            $this->cart->insert($data);
            
            redirect('Cart','refresh');
            
        }
        
        public function update_cart()
        {
            
            $data = array();
            foreach ($this->input->post() as $key => $value) {
                $data[] = $value;
                $this->cart->update($value);
            }
            
            $this->cart->update($data);
            redirect('Cart');
        }

        public function remove_cart($rowid)			
        {
            $this->cart->remove($rowid);
            redirect('Cart');
        }
}
    
    /* End of file Cart.php */
    