<?php
require_once "../koneksi.php";
require_once "../controller/product.php";

$mode = $_REQUEST['mode'];

$objProduct = new Product();

if($mode=="insert"){
	$productName = $_REQUEST['productName'];
	$productDescription = $_REQUEST['productDescription'];
	$category = $_REQUEST['category'];

	$sourcePath = $_FILES['productImg']['tmp_name'];
	$fileName = $_FILES['productImg']['name'];
	
	if(empty($sourcePath)){
		$fileName = "default.jpg";
	}else{
		$targetPath = "../images/".$fileName; 
		move_uploaded_file($sourcePath,$targetPath) ; 
	} 

	$objProduct->save($productName, $productDescription, $category, $fileName);
}else if($mode=="load"){
	$i=1;
	$result = "";
	$products = $objProduct->getAll();
	while($row = $products->fetch_assoc()){ 
	$result.="<tr>";
		$result.="<td>".$i++."</td>";
		$result.="<td>".$row["ProductName"]."</td>";
		$result.="<td>".$row["CategoryName"]."</td>";
		$result.="<td>".$row["ProductDescription"]."</td>";
		$result.="<td><img src='images/".$row["ProductImg"]."'></td>";
		$result.="<td><a class='edit' href='#' data-id='".$row["ProductID"]."'>Edit</a> | <a class='delete' href='#' data-id='".$row["ProductID"]."'>Delete</a></td>";
	$result.="</tr>";
	};
	echo $result;
}else if($mode=="loadOne"){
	$id = $_REQUEST['id'];
	$result = $objProduct->getOne($id)->fetch_assoc();
	echo json_encode($result);
}else if($mode=="update"){
	$productName = $_REQUEST['productName'];
	$productDescription = $_REQUEST['productDescription'];
	$category = $_REQUEST['category'];
	$id = $_REQUEST['id'];

	$sourcePath = $_FILES['productImg']['tmp_name'];
	$fileName = $_FILES['productImg']['name'];

	if(empty($sourcePath)){
		$fileName = "default.jpg";
	}else{
		$targetPath = "../images/".$fileName; 
		move_uploaded_file($sourcePath,$targetPath) ; 
	}

	$objProduct->update($id, $productName, $productDescription, $category, $fileName);
}else if($mode=="delete"){
	$id = $_REQUEST['id'];
	$objProduct->delete($id);
}
?>