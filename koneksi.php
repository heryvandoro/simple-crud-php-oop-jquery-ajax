<?php
class Koneksi{
	private $server = "localhost";
	private $username = "type here";
	private $pass = "type here";
	private $db = "type here";
	private $conn = null;

	public function __construct(){
		$this->conn = new mysqli($this->server, $this->username, $this->pass, $this->db);
	}

	public function getConnection(){
		return $this->conn;
	}
}
?>