<?php 

class Landing extends Controller {
	public function index() {
		session_start();

		if ( isset($_COOKIE['login'])) {
			$_SESSION['login'] = true;
		} 

		if ( isset($_SESSION['login'])) {
			header('Location:' . BASEURL . 'Home');
		}

		$data['judul'] = 'Arch';

		$this->view('Templates/header', $data);
		$this->view('landing/index');
		$this->view('Templates/footer');

	}

	public function daftar() {
		$data['judul'] = 'Daftar';

		$this->view('Templates/header', $data);
		$this->view('landing/daftar');
		$this->view('Templates/footer');

		if (isset($_POST['daftar'])) {

			$_POST['username'] = ltrim($_POST['username']);
			$_POST['username'] = rtrim($_POST['username']);

			$_POST['password'] = ltrim($_POST['password']);
			$_POST['password'] = rtrim($_POST['password']);

			if ( $this->model('User_model')->userSimilar($_POST['username']) > 0 ) {
				echo "
				<script>
				alert('Nama sudah dipakai!');
				</script>
				";
			} else {				

				$this->model('User_model')->buatAkun($_POST);

				setcookie('login', true);
				$_SESSION['login'] = true;
				$_SESSION['user'] = $_POST['username'];
				header('Location:' . BASEURL . 'Home');
				exit();
			}
		}
	}

	public function masuk() {
		session_start();

		$user = trim($_POST['username']);
		$pass = trim($_POST['password']);

		$landing = BASEURL;
		$home = BASEURL . 'Home';

		if ( isset($_POST['masuk'])) {
			if ( ($this->model('User_model')->userSimilar($user) > 0) ) {
				
				if ( ($this->model('User_model')->passCheck($pass)) > 0) {

					setcookie('login', "true", time() + 86400 * 30);
					$_SESSION['login'] = true;
					$_SESSION['user'] = $user;

					echo "
					<script>
						alert ('Login berhasil!');
						document.location.href = '$home'
					</script>
					";

				} else {
					echo "
					<script>
					alert ('Gagal masuk: Password yang anda masukkan salah!');
					document.location.href = '$landing'
					</script>";	
				}

			} else {
				echo "
				<script>
				alert ('Gagal masuk: User tidak ditemukan!');
				document.location.href = '$landing'
				</script>";

			}
		}
	}
}