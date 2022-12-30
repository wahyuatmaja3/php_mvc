<?php 
session_start();

class Write extends Controller {
	public function index() {
		$data['judul'] = "Write";
		$data['user'] = $this->model('User_model')->getUserByName($_SESSION['user']);

		if (isset($_POST['publish'])) {
			$post["judul"] = $_POST['judul'];
			$post["content"] = $_POST['content'];
			$post['penulis'] = $data['user']['id_user'];
			$post['date'] = date("Y-m-d");

			$this->model('Post_model')->tambahPost($post);

			echo "
			<script>
				alert('Post berhasil di publish');
			</script>
			";
		}

		$this->view('Templates/header', $data);
		$this->view('Write/index', $data);
		$this->view('Templates/footer');
	}

	/*
	
	id_post, id_penulis, date, judul, content

	*/


}