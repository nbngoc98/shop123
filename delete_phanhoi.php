<?php 
include 'config/connect.php';
include 'function.php';
$idDelete = $_GET['idDelete'];
$sql = "DELETE FROM phanhoi WHERE MaPH = $idDelete";
if (mysqli_query($connect, $sql) === TRUE) {
	redirectPage('phanhoi.php');
}
?>