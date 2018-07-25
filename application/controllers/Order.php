<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Order extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->library('cart');
            $this->load->model('Order_model');
        }

        public function addorder()
        {

            $cart = $this->cart->contents();
		    if($id_order = $this->Order_model->insertOrder()){
                $data = array();
                foreach($cart as $key=>$value){
                $data[] = array(
                    'fk_order' => $id_order,
                    'fk_produk' => $value['id'],
                    'jml' => $value['qty']
                ); }
            $this->Order_model->insert_order_detail($data);
			$total = $this->Order_model->get_order_total($id_order);
			$this->cart->destroy();
			echo "<script>alert('Pemesanan berhasil,Total Harga : ".$total." Silahkan lakukan pembayaran pada No. Rek. 0000000000000000 dan kirimkan bukti pembayaran pada email info@healthypharma.com')</script>";
            redirect('','refresh');
        }
    
    }
}
    
    /* End of file Order.php */
    