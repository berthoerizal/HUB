<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('desa_model');
	}

	public function index()
	{
		$desa1_L=count($this->desa_model->desa1_L());
		$desa1_P=count($this->desa_model->desa1_P());

		$desa2_L=count($this->desa_model->desa2_L());
		$desa2_P=count($this->desa_model->desa2_P());

		$desa3_L=count($this->desa_model->desa3_L());
		$desa3_P=count($this->desa_model->desa3_P());

		$desa4_L=count($this->desa_model->desa4_L());
		$desa4_P=count($this->desa_model->desa4_P());

		$desa5_L=count($this->desa_model->desa5_L());
		$desa5_P=count($this->desa_model->desa5_P());

		$desa6_L=count($this->desa_model->desa6_L());
		$desa6_P=count($this->desa_model->desa6_P());

		$desa7_L=count($this->desa_model->desa7_L());
		$desa7_P=count($this->desa_model->desa7_P());

		$desa8_L=count($this->desa_model->desa8_L());
		$desa8_P=count($this->desa_model->desa8_P());

		$desa9_L=count($this->desa_model->desa9_L());
		$desa9_P=count($this->desa_model->desa9_P());

		$desa10_L=count($this->desa_model->desa10_L());
		$desa10_P=count($this->desa_model->desa10_P());

		$desa11_L=count($this->desa_model->desa2_L());
		$desa11_P=count($this->desa_model->desa2_P());

		$desa12_L=count($this->desa_model->desa12_L());
		$desa12_P=count($this->desa_model->desa12_P());

		$desa13_L=count($this->desa_model->desa13_L());
		$desa13_P=count($this->desa_model->desa13_P());

		$desa14_L=count($this->desa_model->desa14_L());
		$desa14_P=count($this->desa_model->desa14_P());

		$desa15_L=count($this->desa_model->desa15_L());
		$desa15_P=count($this->desa_model->desa15_P());

		$desa16_L=count($this->desa_model->desa16_L());
		$desa16_P=count($this->desa_model->desa16_P());

		$desa17_L=count($this->desa_model->desa17_L());
		$desa17_P=count($this->desa_model->desa17_P());

		$desa18_L=count($this->desa_model->desa18_L());
		$desa18_P=count($this->desa_model->desa18_P());

		$desa19_L=count($this->desa_model->desa19_L());
		$desa19_P=count($this->desa_model->desa19_P());

		$desa20_L=count($this->desa_model->desa20_L());
		$desa20_P=count($this->desa_model->desa20_P());

		$desa21_L=count($this->desa_model->desa21_L());
		$desa21_P=count($this->desa_model->desa21_P());

		$desa22_L=count($this->desa_model->desa22_L());
		$desa22_P=count($this->desa_model->desa22_P());

		$desa23_L=count($this->desa_model->desa23_L());
		$desa23_P=count($this->desa_model->desa23_P());

		$desa24_L=count($this->desa_model->desa24_L());
		$desa24_P=count($this->desa_model->desa24_P());

		$desa25_L=count($this->desa_model->desa25_L());
		$desa25_P=count($this->desa_model->desa25_P());

		$desa26_L=count($this->desa_model->desa26_L());
		$desa26_P=count($this->desa_model->desa26_P());

		$desa27_L=count($this->desa_model->desa27_L());
		$desa27_P=count($this->desa_model->desa27_P());

		$desa28_L=count($this->desa_model->desa28_L());
		$desa28_P=count($this->desa_model->desa28_P());

		$desa29_L=count($this->desa_model->desa29_L());
		$desa29_P=count($this->desa_model->desa29_P());

		$desa30_L=count($this->desa_model->desa30_L());
		$desa30_P=count($this->desa_model->desa30_P());

		$desa31_L=count($this->desa_model->desa31_L());
		$desa31_P=count($this->desa_model->desa31_P());
		
		$desa32_L=count($this->desa_model->desa32_L());
		$desa32_P=count($this->desa_model->desa32_P());

		$desa33_L=count($this->desa_model->desa33_L());
		$desa33_P=count($this->desa_model->desa33_P());

		$desa34_L=count($this->desa_model->desa34_L());
		$desa34_P=count($this->desa_model->desa34_P());

		$desa35_L=count($this->desa_model->desa35_L());
		$desa35_P=count($this->desa_model->desa35_P());

		$desa36_L=count($this->desa_model->desa36_L());
		$desa36_P=count($this->desa_model->desa36_P());

		
		$data = array('title' => 'Desa', 'isi' => 'admin/kecamatan/list',

						'desa1_L' => $desa1_L, 'desa1_P' => $desa1_P, 
						'desa2_L' => $desa2_L, 'desa2_P' => $desa2_P,
						'desa3_L' => $desa3_L, 'desa3_P' => $desa3_P, 
						'desa4_L' => $desa4_L, 'desa4_P' => $desa4_P,
						'desa5_L' => $desa5_L, 'desa5_P' => $desa5_P,
						'desa6_L' => $desa6_L, 'desa6_P' => $desa6_P,
						'desa7_L' => $desa7_L, 'desa7_P' => $desa7_P,
						'desa8_L' => $desa8_L, 'desa8_P' => $desa8_P,
						'desa9_L' => $desa9_L, 'desa9_P' => $desa9_P,
						'desa10_L' => $desa10_L, 'desa10_P' => $desa10_P,
						'desa11_L' => $desa11_L, 'desa11_P' => $desa11_P,
						'desa12_L' => $desa12_L, 'desa12_P' => $desa12_P,
						'desa13_L' => $desa13_L, 'desa13_P' => $desa13_P,
						'desa14_L' => $desa14_L, 'desa14_P' => $desa14_P,
						'desa15_L' => $desa15_L, 'desa15_P' => $desa15_P,
						'desa16_L' => $desa16_L, 'desa16_P' => $desa16_P,
						'desa17_L' => $desa17_L, 'desa17_P' => $desa17_P,
						'desa18_L' => $desa18_L, 'desa18_P' => $desa18_P,
						'desa19_L' => $desa19_L, 'desa19_P' => $desa19_P,
						'desa20_L' => $desa20_L, 'desa20_P' => $desa20_P,
						'desa21_L' => $desa21_L, 'desa21_P' => $desa21_P,
						'desa22_L' => $desa22_L, 'desa22_P' => $desa22_P,
						'desa23_L' => $desa23_L, 'desa23_P' => $desa23_P,
						'desa24_L' => $desa24_L, 'desa24_P' => $desa24_P,
						'desa25_L' => $desa25_L, 'desa25_P' => $desa25_P,
						'desa26_L' => $desa26_L, 'desa26_P' => $desa26_P,
						'desa27_L' => $desa27_L, 'desa27_P' => $desa27_P,
						'desa28_L' => $desa28_L, 'desa28_P' => $desa28_P,
						'desa29_L' => $desa29_L, 'desa29_P' => $desa29_P,
						'desa30_L' => $desa30_L, 'desa30_P' => $desa30_P,
						'desa31_L' => $desa31_L, 'desa31_P' => $desa31_P,
						'desa32_L' => $desa32_L, 'desa32_P' => $desa32_P,
						'desa33_L' => $desa33_L, 'desa33_P' => $desa33_P,
						'desa34_L' => $desa34_L, 'desa34_P' => $desa34_P,
						'desa35_L' => $desa35_L, 'desa35_P' => $desa35_P,
						'desa36_L' => $desa36_L, 'desa36_P' => $desa36_P,
			
		);

		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/admin/Home.php */