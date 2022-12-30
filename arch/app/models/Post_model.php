<?php 

class Post_model {
	public $table = 'post';
	public $db;

	public function __construct() {
		$this->db = new Database;
	}

	public function getPostByName($username) {
		$this->db->query("SELECT * FROM " . $this->table . " WHERE id_penulis=:username");
		$this->db->bind('username', $username);
		$this->db->execute();

		return $this->db->resultSet();
	}

	public function getPostByJudul($judul) {
		
		$this->db->query("SELECT * FROM " . $this->table . " WHERE judul=:judul");
		$this->db->bind('judul', $judul);
		$this->db->execute();

		return $this->db->single();
	}

	public function getPostById($id) {
		
		$this->db->query("SELECT * FROM " . $this->table . " WHERE id_post=:id");
		$this->db->bind('id', $id);
		$this->db->execute();

		return $this->db->single();
	}

	public function getAllPost() {
		$this->db->query("SELECT * FROM " . $this->table);
		$this->db->execute();

		return $this->db->resultSet();
	}

	public function tambahPost($post) {
		$query = "INSERT INTO post 
		          VALUES
		          ('', :penulis, :tgl, :judul, :content)";
		$this->db->query($query);

		$this->db->bind('penulis', $post['penulis']);
		$this->db->bind('tgl', $post['date']);
		$this->db->bind('judul', $post['judul']);
		$this->db->bind('content', $post['content']);

		$this->db->execute();

		return $this->db->rowCount();
	}
}