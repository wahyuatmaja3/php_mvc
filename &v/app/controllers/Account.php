<?php 

class Account extends Controller {
	public function index(string $nama = "") {
		$data['judul'] = "Account - $nama";
		$data['user'] = $this->model('Account_model')->getAccount($nama);

		$this->view('Templates/header', $data);
		$this->view('account/css', $data);
		$this->view('Templates/header_end');
		$this->view('Templates/navbar');
		$this->view('account/index', $data);
		$this->view('Templates/footer');
	}
}