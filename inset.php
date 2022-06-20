<?php

error_reporting(0);
include_once 'connect.php';
;

if(isset($_POST['create']))
{	 
	 $id = $_POST['id'];
	 $name = $_POST['name'];
	 $quantity = $_POST['quantity'];
	 $price = $_POST['price'];
          $cat = $_POST['cat'];
	 $sql = "INSERT INTO product (id,name,quantity,price,category)
	 VALUES ('$id','$name','$quantity','$price','$cat')";
	 if (!mysqli_query($con, $sql))
                 echo "<script>alert('oops!Not inserted');</script>";
                
    
  
  else
    {
      echo "<script>alert('inserted successfully');</script>";
        header("Location: table.php");
    }
}
?>




