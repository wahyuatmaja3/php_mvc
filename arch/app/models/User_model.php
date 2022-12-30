<?php 

class User_model {

	private $table = 'user';
	private $db;

	public function __construct() {
		$this->db = new Database;
	}

	public function getAllUser() {
		$this->db->query("SELECT * FROM " . $this->table);
		return $this->db->resultSet();
	}

	public function getUserByName($username) {
		$this->db->query("SELECT * FROM " . $this->table . " WHERE username =:username");
		$this->db->bind('username', $username);
		$this->db->execute();

		return $this->db->single();
	}

	public function getUserById($id) {
		$this->db->query("SELECT * FROM " . $this->table . " WHERE id_user =:id");
		$this->db->bind('id', $id);
		$this->db->execute();

		return $this->db->single();
	}

	public function getFollowingByName($username) {
		$this->db->query("SELECT following FROM " . $this->table . " WHERE username=:username");
		$this->db->bind('username', $username);
		$this->db->execute();

		return $this->db->single();
	}

	public function userSimilar($user) {
		$cekUser = mysqli_query($this->db->connect(), "SELECT * FROM " . $this->table . " WHERE username = '$user'");
		return mysqli_num_rows($cekUser);
	} 

	public function passCheck($pass) {
		$cekPass = mysqli_query($this->db->connect(), "SELECT * FROM " . $this->table . " WHERE pass_user = '$pass'");
		return mysqli_num_rows($cekPass);
	}

	public function buatAkun($data) {

		$query = "INSERT INTO user 
				VALUES 
				('', :username, :password, '' )";

		$this->db->query($query);

		$this->db->bind('username', $data['username']);
		$this->db->bind('password', $data['password']);

		$this->db->execute();

		return $this->db->rowCount();

	}



}