<?php 
include 'config/connect.php';
include 'function.php';
$idDelete = $_GET['idDelete'];
$sql = "DELETE FROM admin WHERE id = $idDelete";
if (mysqli_query($connect, $sql) === TRUE) {
	redirectPage('user_admin.php');
}
?>