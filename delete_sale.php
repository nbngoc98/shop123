<?php 
include 'config/connect.php';
include 'function.php';
$idDelete = $_GET['idDelete'];
$sql = "DELETE FROM sales WHERE MaSale = $idDelete";
if (mysqli_query($connect, $sql) === TRUE) {
	redirectPage('list_sale.php');
}
?>