<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Order_model extends CI_Model {
        public function insertOrder()
        {
            $data['tanggal'] = date("Y-m-d");
            $data['status'] = 'belum di bayar';
            $data['fk_user'] = $this->session->userdata('id');
            $query = $this->db->insert('order', $data);
            return $this->db->insert_id();
        }

        public function insert_order_detail($data)
        {
            $this->db->insert_batch('order_detail',$data);
        }

        public function insert_total($id,$total)
        {
            $data = array(
                'total' => $total
            );
            $this->db->where('id',$id)->update('order',$data);
        }

        public function get_order_total($id)
        {
            $this->db->select('sum(order_detail.jml*produk.harga) as total');
            $this->db->where('fk_order',$id);
            $this->db->join('produk','fk_produk=produk.id_produk');
            return $this->db->get('order_detail')->row(0)->total;
        }
        public function getDataWhere($where)
        {
            $this->db->select("o.id_order,o.order_date,o.status,group_concat(produk.nama_produk,'-', o_d.jumlah) as detail_produk,sum(order_detail.jml*harga) as total");
            $this->db->from('order o');
            $this->db->join('order_detail ','o.id = o_d.fk_order','left');
            $this->db->join('produk','o_d.fk_produk=produk.id_produk','left');
            $this->db->group_by('o.id_order,o.date_order,o.status');
            $this->db->where($where);
            return $this->db->get()->result_array();
	}
    }
    
    /* End of file Order_model.php */
    