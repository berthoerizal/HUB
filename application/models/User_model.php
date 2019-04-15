<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing_admin()
	{
		$query=$this->db->query("select * from user where akses_level=21");
		return $query->result();
	}

	public function listing_user()
	{
		$query=$this->db->query("select * from user where akses_level=1");
		return $query->result();
	}

		//show data detail
	public function detail($username)
	{
		$query=$this->db->get_where('user',array('username'=>$username));
		return $query->row();
	}

	//tambah data
	public function add($data)
	{
		$this->db->insert('user', $data);
	}

	//edit data
	public function update($data)
	{
		$this->db->where('username', $data['username']);
		$this->db->update('user', $data);
	}

	//delete data
	public function delete($data)
	{
		$this->db->where('username', $data['username']);
		$this->db->delete('user', $data);
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */