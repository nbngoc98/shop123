<?php 
include 'config/connect.php';
include 'function.php';
$idDelete = $_GET['idDelete'];
$sql = "DELETE FROM product WHERE id = $idDelete";
if (mysqli_query($connect, $sql) === TRUE) {
	redirectPage('list_product.php');
}
?>