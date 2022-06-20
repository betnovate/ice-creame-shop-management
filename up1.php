<?php

include('connect.php');


if(isset($_GET['edit'])){

    $id= $_GET['edit'];
 
}

if(isset($_POST['update']) && isset($_GET['edit'])){

  $id= $_GET['edit'];
  update_data($con,$id);
    
    
} 


 $query= "SELECT * FROM stock WHERE id= $id" ;
 $exec = mysqli_query($con, $query);
 $row= mysqli_fetch_assoc($exec);
$id=$row['id'];
 $productname=$row['name'];
	 $quantity = $row['quantity'];
	 $price = $row['price'];
          $supplier = $row['supplier'];
 $contact = $row['contact'];


// update data query
function update_data($con, $id){

    $productname= legal_input($_POST['raw']);
      $quantity= legal_input($_POST['quantity']);
      $price = legal_input($_POST['price']);
      $supplier = legal_input($_POST['supplier']);
$contact = legal_input($_POST['contact']);
      $query="UPDATE stock
            SET name='$productname',
                quantity='$quantity',
                price= '$price',
                    supplier='$supplier',
                contact='$contact' WHERE id=$id";

      $exec= mysqli_query($con,$query);
  
      if($exec){
         header('location:show.php');
      
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