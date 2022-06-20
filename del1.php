<?php
include('connect.php');


if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	mysqli_query($con, "DELETE FROM orders WHERE id=$id");
	$_SESSION['message'] = "Record deleted!"; 
	header('location: tab.php');
}
?>

