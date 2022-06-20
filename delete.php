
<?php
include('connect.php');


if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	mysqli_query($con, "DELETE FROM product WHERE id=$id");
	$_SESSION['message'] = "Record deleted!"; 
	header('location: table.php');
}
?>