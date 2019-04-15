<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->db2 = $this->load->database('data_desa2', TRUE);
		$this->db3 = $this->load->database('data_desa3', TRUE);
		$this->db4 = $this->load->database('data_desa4', TRUE);
		
    }
    

	public function desa1()
	{
		$query=$this->db->query("select id from tweb_penduduk");
		return $query->result();
	}

	public function desa2()
	{
		$query=$this->db2->query("select id from tweb_penduduk");
		return $query->result();
	}

	public function desa3()
	{
		$query=$this->db3->query("select id from tweb_penduduk");
		return $query->result();
	}
	public function desa4()
	{
		$query=$this->db4->query("select id from tweb_penduduk");
		return $query->result();
	}
	
	
}



/* End of file Kecamatan_model.php */
/* Location: ./application/models/Kecamatan_model.php */