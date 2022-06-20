<?php

error_reporting(0);
include_once 'connect.php';


if(isset($_POST['create']))
{	 
	 $id = $_POST['id'];
	 $productname = $_POST['raw'];
	 $quantity = $_POST['quantity'];
	 $price = $_POST['price'];
          $supplier = $_POST['sup'];
          $contact = $_POST['contact'];
          
	 $sql = "INSERT INTO stock(id,name,quantity,price,supplier,contact)
	 VALUES ('$id','$productname','$quantity','$price','$supplier','$contact')";
	 if (!mysqli_query($con, $sql))
                 echo "<script>alert('oops!Not inserted');</script>";
                
    
  
  else
    {
      echo "<script>alert('inserted successfully');</script>";
         header("Location: show.php");
    }
}
?>
