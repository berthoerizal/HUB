<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->db2 = $this->load->database('data_desa2', TRUE);
		$this->db3 = $this->load->database('data_desa3', TRUE);
		$this->db4 = $this->load->database('data_desa4', TRUE);
		$this->db5 = $this->load->database('data_desa5', TRUE);
		$this->db6 = $this->load->database('data_desa6', TRUE);
		$this->db7 = $this->load->database('data_desa7', TRUE);
		$this->db8 = $this->load->database('data_desa8', TRUE);
		$this->db9 = $this->load->database('data_desa9', TRUE);
		$this->db10 = $this->load->database('data_desa10', TRUE);
		$this->db11 = $this->load->database('data_desa11', TRUE);
		$this->db12 = $this->load->database('data_desa12', TRUE);
		$this->db13 = $this->load->database('data_desa13', TRUE);
		$this->db14 = $this->load->database('data_desa14', TRUE);
		$this->db15 = $this->load->database('data_desa15', TRUE);
		$this->db16 = $this->load->database('data_desa16', TRUE);
		$this->db17 = $this->load->database('data_desa17', TRUE);
		$this->db18 = $this->load->database('data_desa18', TRUE);
		$this->db19 = $this->load->database('data_desa19', TRUE);
		$this->db20 = $this->load->database('data_desa20', TRUE);
		$this->db21 = $this->load->database('data_desa21', TRUE);
		$this->db22 = $this->load->database('data_desa22', TRUE);
		$this->db23 = $this->load->database('data_desa23', TRUE);
		$this->db24 = $this->load->database('data_desa24', TRUE);
		$this->db25 = $this->load->database('data_desa25', TRUE);
		$this->db26 = $this->load->database('data_desa26', TRUE);
		$this->db27 = $this->load->database('data_desa27', TRUE);
		$this->db28 = $this->load->database('data_desa28', TRUE);
		$this->db29 = $this->load->database('data_desa29', TRUE);
		$this->db30 = $this->load->database('data_desa30', TRUE);
		$this->db31 = $this->load->database('data_desa31', TRUE);
		$this->db32 = $this->load->database('data_desa32', TRUE);
		$this->db33 = $this->load->database('data_desa33', TRUE);
		$this->db34 = $this->load->database('data_desa34', TRUE);
		$this->db35 = $this->load->database('data_desa35', TRUE);
		$this->db36 = $this->load->database('data_desa36', TRUE);






	}


	public function desa1_L()
	{
		$query=$this->db->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa1_P()
	{
		$query=$this->db->query("select id from tweb_penduduk where sex=2");
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

	public function desa3_L()
	{
		$query=$this->db3->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa3_P()
	{
		$query=$this->db3->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa4_L()
	{
		$query=$this->db4->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa4_P()
	{
		$query=$this->db4->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa5_L()
	{
		$query=$this->db5->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa5_P()
	{
		$query=$this->db5->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa6_L()
	{
		$query=$this->db6->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa6_P()
	{
		$query=$this->db6->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa7_L()
	{
		$query=$this->db7->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa7_P()
	{
		$query=$this->db7->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa8_L()
	{
		$query=$this->db8->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa8_P()
	{
		$query=$this->db8->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa9_L()
	{
		$query=$this->db9->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa9_P()
	{
		$query=$this->db9->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa10_L()
	{
		$query=$this->db10->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa10_P()
	{
		$query=$this->db10->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa11_L()
	{
		$query=$this->db11->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa11_P()
	{
		$query=$this->db11->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}	
	public function desa12_L()
	{
		$query=$this->db12->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa12_P()
	{
		$query=$this->db12->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa13_L()
	{
		$query=$this->db13->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa13_P()
	{
		$query=$this->db13->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa14_L()
	{
		$query=$this->db14->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa14_P()
	{
		$query=$this->db14->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa15_L()
	{
		$query=$this->db15->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa15_P()
	{
		$query=$this->db15->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa16_L()
	{
		$query=$this->db16->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa16_P()
	{
		$query=$this->db16->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa17_L()
	{
		$query=$this->db17->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa17_P()
	{
		$query=$this->db17->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa18_L()
	{
		$query=$this->db18->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa18_P()
	{
		$query=$this->db18->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa19_L()
	{
		$query=$this->db19->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa19_P()
	{
		$query=$this->db19->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa20_L()
	{
		$query=$this->db20->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa20_P()
	{
		$query=$this->db20->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa21_L()
	{
		$query=$this->db21->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa21_P()
	{
		$query=$this->db21->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa22_L()
	{
		$query=$this->db22->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa22_P()
	{
		$query=$this->db22->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa23_L()
	{
		$query=$this->db23->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa23_P()
	{
		$query=$this->db23->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa24_L()
	{
		$query=$this->db24->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa24_P()
	{
		$query=$this->db24->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa25_L()
	{
		$query=$this->db25->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa25_P()
	{
		$query=$this->db25->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa26_L()
	{
		$query=$this->db26->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa26_P()
	{
		$query=$this->db26->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa27_L()
	{
		$query=$this->db27->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa27_P()
	{
		$query=$this->db27->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa28_L()
	{
		$query=$this->db28->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa28_P()
	{
		$query=$this->db28->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa29_L()
	{
		$query=$this->db29->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa29_P()
	{
		$query=$this->db29->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa30_L()
	{
		$query=$this->db30->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa30_P()
	{
		$query=$this->db30->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa31_L()
	{
		$query=$this->db31->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa31_P()
	{
		$query=$this->db31->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa32_L()
	{
		$query=$this->db32->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa32_P()
	{
		$query=$this->db32->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa33_L()
	{
		$query=$this->db33->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa33_P()
	{
		$query=$this->db33->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa34_L()
	{
		$query=$this->db34->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa34_P()
	{
		$query=$this->db34->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa35_L()
	{
		$query=$this->db35->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa35_P()
	{
		$query=$this->db35->query("select id from tweb_penduduk where sex=2");
		return $query->result();
	}
	public function desa36_L()
	{
		$query=$this->db36->query("select id from tweb_penduduk where sex=1");
		return $query->result();
	}

	public function desa36_P()
	{
		$query=$this->db36->query("select id from tweb_penduduk where sex=2");
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