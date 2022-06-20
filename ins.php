<?php

error_reporting(0);
include_once 'connect.php';


if(isset($_POST['submit']))
{	 

	 $item = $_POST['item'];
	 $quantity = $_POST['quantity'];
	 $price = $_POST['price'];
          $img = $_POST['img'];
          
	 $sql = "INSERT INTO cart(id,name,quantity,price,image)
	 VALUES ('$item','$quantity','$price','$img')";
	 if (!mysqli_query($con, $sql))
                 echo "<script>alert('oops!Not inserted');</script>";
                
    
  
  else
    {
      echo "<script>alert('inserted successfully');</script>";
         header("Location: display.php");
    }
}
?>

