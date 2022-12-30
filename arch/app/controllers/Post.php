<?php 

class Post extends Controller {
	public function index($post) {
		session_start();

		$post = explode("|", $post);
		$post[1] = str_replace("_", " ", $post[1]);
		$data['judul'] = $post[1];
		$data['user'] = $this->model('User_model')->getUserByName($_SESSION['user']);

		$data['post'] = $this->model("Post_model")->getPostById($post[0]);
		$data['post_undefined'] = $data['post'];

		if ($data['post_undefined']) {
			$data['penulis'] = $this->model("User_model")->getUserById($data['post']['id_penulis']);
			$data['post']['date'] = date("j M Y", strtotime($data['post']['date']));
		}


		$this->view('Templates/header', $data);
		$this->view('Templates/navbar', $data);
		$this->view('Post/index', $data);
		$this->view('Templates/footer');
	}
}