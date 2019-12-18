<?php

class Home extends CI_Controller {
	public function index()
	{
		$jdl['judul'] = 'Halaman awal';
		$this->load->view('template/header', $jdl);
		$this->load->view('home/index');
		$this->load->view('template/footer');
	}

}
