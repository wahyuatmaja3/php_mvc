<?php 

class Home extends Controller {
	public function index() {
		$data['judul'] = 'Home';
		$data['spaces'] = $this->model('Spaces_model')->getSpaces();

		$this->view('Templates/header', $data);
		$this->view('Home/css');
		$this->view('Templates/header_end');
		$this->view('Templates/navbar');
		$this->view('Home/index', $data);
		$this->view('Templates/footer');
	}
}