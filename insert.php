<?php

error_reporting(0);
include_once 'connect.php';
;

if(isset($_POST['create']))
{	 
	 $id = $_POST['id'];
	 $proname = $_POST['proname'];
	 $cusname = $_POST['cusname'];
	 $phone = $_POST['phone'];
          $address = $_POST['address'];
          $price = $_POST['price'];
          $quantity = $_POST['quantity'];
	 $sql = "INSERT INTO orders (id,proname,cusname,phone,address,price,quantity)
	 VALUES ('$id','$proname','$cusname','$phone','$address','$price','$quantity')";
	 if (!mysqli_query($con, $sql))
                 echo "<script>alert('You have successfully inserted the data');</script>";
    
  
  else
    {
      echo "<script>alert('inserted successfully');</script>";
       header("Location: tab.php");
    }
}
?>


