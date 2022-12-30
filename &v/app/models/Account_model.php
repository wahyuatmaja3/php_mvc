<?php 

class Account_model {
	private $table = 'user';
	private $db;

	public function __construct() {
		$this->db = new Database;
	}

	public function getAccount($name_user) {
		$this->db->query("SELECT * FROM $this->table WHERE name_user =:name_user");
		$this->db->bind('name_user', $name_user );
		return $this->db->single();
	}


}