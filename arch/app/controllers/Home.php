<?php 
session_start();

class Home extends Controller {
	public function index() {
		$data['judul'] = 'Home';

		if ( !isset($_SESSION['login']) ) {
			header('Location:' . BASEURL);
		}

		if ( isset($_SESSION['login'])) {
			$user = $this->model('User_model')->getUserByName($_SESSION['user']);
		}

		$data['user'] = $user;
		$data['post'] = $this->model('Post_model')->getAllPost();

		$data['keyword'] = "";

		if ( isset($_POST['cari']) ) {
			$cari_post = [];
			$_POST['keyword'] = trim($_POST['keyword']);

			if ( !$_POST['keyword'] == "" ) {
				$data['keyword'] = $_POST['keyword'];

				foreach ($data['post'] as $post) {
					$post['judul'] = "_" . $post['judul'];

					if (stripos($post['judul'], $_POST['keyword']) > 0) {
						$post['judul'] = ltrim($post['judul'], "_");
						$cari_post[] = $post;
					}
				}
				$data['post'] = array();
				$data['post'] = $cari_post;
			}
		}


		$this->view('Templates/header', $data);
		$this->view('Templates/navbar', $data);
		$this->view('Home/index', $data);
		$this->view('Templates/footer');

	}


}