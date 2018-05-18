<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

    public function list($limit, $start)
        {
            $query = $this->db->get('produk', $limit, $start);
            return ($query->num_rows()>0) ? $query->result() :false;
        }

        public function getTotal()
        {
            return $this->db->count_all('produk');
        }


        public function insert($data = [])
        {
            $result = $this->db->insert('produk', $data);
            return $result;
        }

        public function show($id_produk)
        {
            $this->db->where('id_produk', $id_produk);
            $query = $this->db->get('produk');
            return $query->row();
        }

        public function update($id_produk, $data = [])
        {
            $ubah = array(
                'nama_produk' => $data['nama_produk'],
                'kategori' => $data['kategori'],
                'deskripsi' => $data['deskripsi'],
                'komposisi' => $data['komposisi'],
                'indikasi' => $data['indikasi'],
                'stok' => $data['stok'],
                'harga' => $data['harga']
            );

            $this->db->where('id_produk', $id_produk);
            $this->db->update('produk', $ubah);
        }


        public function delete($id_produk)
        {
            $this->db->where('id_produk', $id_produk);
            $this->db->delete('produk');
        }

        public function get_kategori()
        {
            $query = $this->db->get('kategori_produk');
            return $query->result();
        }

}

/* End of file Produk_model.php */


?>