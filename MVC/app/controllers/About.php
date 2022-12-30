<?php 

class About extends Controller{
	public function index() {
		$data['judul'] = 'ABOUT';

		$this->view('templates/header', $data);
		$this->view('templates/navbar');
		$this->view('about/index');
		$this->view('templates/footer');
	}

	public function person($nama = "person", $pekerjaan = null) {
		$data['judul'] = 'ABOUT|PERSON';

		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$this->view('templates/header', $data);
		$this->view('templates/navbar');
		$this->view('about/person', $data);
		$this->view('templates/footer');
	}
}