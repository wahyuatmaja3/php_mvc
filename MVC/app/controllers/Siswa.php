<?php 

class Siswa extends Controller {
	public function index() {
		$data['judul'] = "SISWA";
		$data['siswa'] = $this->model('Siswa_model')->getAllSiswa();

		$this->view('templates/header', $data);
		$this->view('templates/navbar');
		$this->view('siswa/index', $data);
		$this->view('templates/footer');
	}
}