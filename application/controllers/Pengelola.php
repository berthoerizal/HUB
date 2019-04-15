<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengelola extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		$user=$this->user_model->listing_admin();
		$valid= $this->form_validation;
		$valid->set_rules('nama', 'Nama', 'required', array('required' => 'Nama harus diisi'));
		$valid->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', array(
			'required' => 'Username user harus diisi',
			'is_unique' => 'Username <strong>'.$this->input->post('username').'</strong> sudah digunakan',
			'trim' => 'Username tidak boleh ada spasi'));
		$valid->set_rules('password', 'Password', 'required|max_length[12]|min_length[6]', array(
			'required' => 'Password harus diisi',
			'max_lenght' => 'Password maksimal 12 karakter',
			'min_length' => 'Password minimal 6 karakter'));

		if($valid->run() === FALSE) {
			$data = array(
			'title' => 'Pengelola Website ',
			'isi' => 'admin/pengelola/list',
			'user' => $user
			);
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		} else {
			$pengelola=21;
			$data = array(	
							'nama' => $this->input->post('nama'), 
							'username' => $this->input->post('username'), 
						 	'password' => sha1($this->input->post('password')), 
							'akses_level' => $pengelola,
							); 

			$this->user_model->add($data);
			$this->session->set_flashdata('sukses','Pengelola telah ditambah');
			redirect(base_url('pengelola'));
		}
	}

	public function hapus($username)
	{
		$user=$this->user_model->detail($username);
		$data = array('username' => $user->username );
		$this->user_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data berhasil dihapus');
		redirect(base_url('pengelola'));
	}

	public function detail($username)
	{
		$user=$this->user_model->detail($username);
		$valid= $this->form_validation;
		$valid->set_rules('nama', 'Nama', 'required', array('required' => 'Nama harus diisi'));

		if($valid->run() === FALSE) {
			$data = array(
			'title' => 'Profile '.$user->nama,
			'isi' => 'admin/pengelola/detail',
			'user' => $user
			);
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		} else {
			$data = array(	'username' => $username,
							'nama' => $this->input->post('nama'), 
							'email' => $this->input->post('email'),
							'telepon' => $this->input->post('telepon')
							); 

			$this->user_model->update($data);
			$this->session->set_flashdata('sukses','Pengelola telah diedit');
			redirect(base_url('pengelola/detail/'.$user->username));
		}
	}

}

/* End of file Pengelola.php */
/* Location: ./application/controllers/Pengelola.php */