<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambah_siswa extends CI_Controller {

	public function index()
	{
		$data['alamat'] = $this->db->get('alamat')->result_array();
		$this->load->view('template/header');
		$this->load->view('tambah_siswa', $data);
		$this->load->view('template/footer');
	}

	public function tambah()
	{
		$this->load->model('siswa_model');
		$data['siswa'] = $this->siswa_model->tambahsiswa();
		redirect('admin');
	}

}