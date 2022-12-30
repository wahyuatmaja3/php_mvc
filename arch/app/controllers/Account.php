<?php 
session_start();

class Account extends Controller {
	public function index($user) {

		$data['judul'] = 'Account - ' . $user;
		$data['user'] = $this->model('User_model')->getUserByName($user);
		$data['user']['post'] = $this->model('Post_model')->getPostByName($data['user']['id_user']);

		$this->view('Templates/Header', $data);
		$this->view('Templates/Navbar', $data);
		$this->view('Account/index', $data);
		$this->view('Templates/footer');

	}

	public function following() {
		$data['judul'] = 'Following - ' . $_SESSION['user'];
		$user = $this->model('User_model')->getUserByName($_SESSION['user']);
		$user['following'] = explode(",", $user['following']);
		$data['user'] = $user;

		$data['keyword'] = "";

		if (isset($_POST['cari'])) {
			$cari_follow = [];

			if ( !$_POST['keyword'] == "") {
				$data['keyword'] = $_POST['keyword'];

				foreach ($data['user']['following'] as $user_follow) {
					$_POST['keyword'] = strtolower($_POST['keyword']);
					$_POST['keyword'] = trim($_POST['keyword']);
					$user_follow = "@" . $user_follow;

					if (strpos($user_follow, $_POST['keyword']) > 0 ) {
						$user_follow = ltrim($user_follow, "@");
						$cari_follow[] = $user_follow;
					}
				}
				$data['user']['following'] = array();
				$data['user']['following'] = $cari_follow;
			}
		}

		$this->view('Templates/Header', $data);
		$this->view('Account/following', $data);
		$this->view('Templates/footer');
	}

	public function logout() {
		session_destroy();
		setcookie('login', 'false');	
		$landing = BASEURL;
		echo "
		<script>
			alert ('Logout Berhasil!');
			document.location.href = '$landing'
		</script>
		";
	}
}