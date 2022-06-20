<?php

include('connect.php');


if(isset($_GET['edit'])){

    $id= $_GET['edit'];
 
}

if(isset($_POST['update']) && isset($_GET['edit'])){

  $id= $_GET['edit'];
  update_data($con,$id);
    
    
} 


 $query= "SELECT * FROM product WHERE id= $id" ;
 $exec = mysqli_query($con, $query);
 $row= mysqli_fetch_assoc($exec);
$id=$row['id'];
 $name=$row['name'];
	 $quantity = $row['quantity'];
	 $price = $row['price'];
          $cat = $row['category'];
 


// update data query
function update_data($con, $id){

    $name= legal_input($_POST['name']);
      $quantity= legal_input($_POST['quantity']);
      $price = legal_input($_POST['price']);
      $cat = legal_input($_POST['cat']);

      $query="UPDATE product
            SET name='$name',
                quantity='$quantity',
                price= '$price',
                category='$cat' WHERE id=$id";

      $exec= mysqli_query($con,$query);
  
      if($exec){
         header('location:table.php');
      
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