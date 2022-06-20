<?php

include('connect.php');

$fetchData= fetch_data($con);

// fetch query
function fetch_data($con){
  $query="SELECT * from product";
  $exec=mysqli_query($con, $query);
  if(mysqli_num_rows($exec)>0){

    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
?>

