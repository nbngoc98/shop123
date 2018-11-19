<?php 
include 'config/connect.php';
include 'function.php';
$idDelete = $_GET['idDelete'];
$sql = "DELETE FROM comment WHERE MaCom = $idDelete";
if (mysqli_query($connect, $sql) === TRUE) {
	redirectPage('comment.php');
}
?>