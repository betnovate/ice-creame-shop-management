<?php

include('connect.php');


if(isset($_GET['edit'])){

    $id= $_GET['edit'];
 
}

if(isset($_POST['update']) && isset($_GET['edit'])){

  $id= $_GET['edit'];
  update_data($con,$id);
    
    
} 


 $query= "SELECT * FROM orders WHERE id= $id";
 $exec = mysqli_query($con, $query);
 $row= mysqli_fetch_assoc($exec);
$id=$row['id'];
 $proname=$row['proname'];
 $cusname = $row['cusname'];
 $phone = $row['phone'];
 $address = $row['address'];
 $price = $row['price'];
	 $quantity = $row['quantity'];
	
 


// update data query
function update_data($con, $id){

    $proname= legal_input($_POST['proname']);
     $cusname= legal_input($_POST['cusname']);
      $phone= legal_input($_POST['phone']);
       $address= legal_input($_POST['address']);
        $price= legal_input($_POST['price']);
           
      $quantity= legal_input($_POST['quantity']);
      

      $query="UPDATE orders
            SET proname='$proname',
                cusname= '$cusname',
                    phone= '$phone',
                        address= '$address',
                        price= '$price',
                   quantity='$quantity' WHERE id=$id";
               

      $exec= mysqli_query($con,$query);
  
      if($exec){
         header('location:tab.php');
      
      }else{
         $msg= "Error: " . $query . "<br>" . mysqli_error($con);
         echo $msg;  
      }
}

// convert illegal input to legal input
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>
