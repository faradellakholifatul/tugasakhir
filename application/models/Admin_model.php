<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function getData()
	{
		$this->db->select('order.*,user.nama,user.alamat,user.notelp,user.email');
		$this->db->from("order");
		$this->db->join("user","order.fk_user=user.id",'left');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function change_status()
	{
		$id = $this->input->post('id');
		$data['status'] = $this->input->post('status');
		$this->db->where('id',$id);
		$this->db->update('order',$data);
	}
}
