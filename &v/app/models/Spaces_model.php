<?php 

class Spaces_model {
	private $table = 'spaces';
	private $db;

	public function __construct() {
		$this->db = new Database;
	}

	public function getSpaces() {
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}
}