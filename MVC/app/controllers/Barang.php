<?php 

class Barang extends Controller {
	public function index() {
		$data['judul'] = 'Barang';
		$data['barang'] = $this->model('Barang_model')->getAllBarang();

		$this->view('templates/header', $data);
		$this->view('templates/navbar');
		$this->view('barang/index', $data);
		$this->view('templates/footer');

	}

	public function detail(int $id = 0) {
		$barang = $this->model('Barang_model')->getBarang($id);
		$iBarang = count($this->model('Barang_model')->getAllBarang($id));

		$data['judul'] = 'Produk';
		$data['panjang'] = $iBarang;
		$data['barang'] = $barang;

		if ($id <= 0 || $id > $iBarang) {
			$this->view('templates/header', $data);
			$this->view('templates/navbar');
			$this->view('barang/detail_udf', $data);
			$this->view('templates/footer');
		} else {

			$this->view('templates/header', $data);
			$this->view('templates/navbar');
			$this->view('barang/detail', $data);
			$this->view('templates/footer');
		}
	}
}