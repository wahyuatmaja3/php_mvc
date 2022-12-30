<?php 

class Home extends Controller {
	public function index() {
		$data['judul'] = 'HOME';
		$data['nama'] = $this->model('Person_model')->getPerson();

		$this->view('templates/header', $data);
		$this->view('templates/navbar');
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}
}