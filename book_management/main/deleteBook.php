<?php

session_start();

include('db_conn.php');

$id = $_SESSION['id'];

$isbn = $_GET['isbn'];

$delete = "DELETE from myinventry where bookIsbn = '$isbn' and userId = '$id'";
$res = mysqli_query($conn,$delete);
if ($delete) {
	echo "<script>alert('Book deleted successfully!..');window.location.href='inventary.php';</script>";
} else {
	echo "<script>alert('Book deleted failed!..');window.location.href='inventary.php';</script>";
}

?>