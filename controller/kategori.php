<?php
class Kategori{
	private $conn;
	private $table;
	public function __construct(){
		$db = new Koneksi();
		$this->conn = $db->getConnection();
		$this->table = "Category";
	}

	public function getAll(){
		return $this->conn->query("SELECT * from $this->table");
	}
}
?>