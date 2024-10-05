<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alamat extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}


	public function index()
	{
		$this->load->model('alamat_model');
		$data['alamat'] = $this->alamat_model->getAlamat();

		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('alamat', $data);
		$this->load->view('template/footer');
	}

    public function hapus($id){
		$this->db->delete('alamat', ['id' => $id]);
		redirect('alamat');
	}

    public function tambah_alamat()
	{
		$this->load->view('template/header');
        $this->load->view('template/menu');
		$this->load->view('tambah_alamat');
		$this->load->view('template/footer');
	}

	public function simpan()
	{
		$this->load->model('alamat_model');
		$data['alamat'] = $this->alamat_model->tambahAlamat();
		redirect('alamat');
	}


}