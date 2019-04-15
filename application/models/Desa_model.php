<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->db1 = $this->load->database('data_desa1', TRUE);
		$this->db2 = $this->load->database('data_desa2', TRUE);

	}


	public function desa1_L()
	{
		$query=$this->db1->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa1_P()
	{
		$query=$this->db1->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}

	public function desa2_L()
	{
		$query=$this->db2->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa2_P()
	{
		$query=$this->db2->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}

	


	// public function desa2()
	// {
	// 	$query=$this->db->query("select id from tweb_penduduk where sex=1");
	// 	return $query->result();
	// }

}

/* End of file Home_model.php */
/* Location: ./application/models/Home_model.php */