<?php
class Product{
	private $conn;
	private $table;

	public function __construct(){
		$db = new koneksi();
		$this->conn = $db->getConnection();
		$this->table = "product";
	}
	public function getAll(){
		return $this->conn->query("SELECT * from $this->table JOIN category on $this->table.CategoryID=category.CategoryID");
	}
	
	public function save($name, $deskripsi, $kategori, $productImg){
		echo $name;
		$this->conn->query("INSERT into $this->table( ProductName, ProductDescription, CategoryID, productImg) VALUES('$name', '$deskripsi', '$kategori', '$productImg')");
		echo "sukses";
	}

	public function getOne($id){
		return $this->conn->query("SELECT * from $this->table JOIN category on $this->table.CategoryID=category.CategoryID WHERE $this->table.ProductID='$id'");
	}
	
	public function update($id, $name, $deskripsi, $kategori, $productImg){
		$this->conn->query("UPDATE $this->table SET ProductName='$name', ProductDescription='$deskripsi', CategoryID='$kategori', productImg='$productImg' WHERE ProductID='$id'");
	}

	public function delete($id){
		$this->conn->query("DELETE from $this->table WHERE ProductID = '$id'");
	}
}
?>