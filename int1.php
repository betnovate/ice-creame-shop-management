<?php
include('correct.php');
?>


<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ORDERS</title>
<style>
    
body{
    overflow-x: hidden;
     background-color: linen
}
* {
  box-sizing: border-box;}
.user-detail form {
    height: 100vh;
    border: 2px solid #f1f1f1;
    padding: 20px;
    background-color: white;
    margin: 0 auto;
  width: 500px;
   
   
};  
   
    }
    .user-detail{
      width: 30%;
    float: left;
    }
input{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;}
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;}
button[type=submit] {
    background-color: #434140;
    color: #ffffff;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    font-size: 20px;}
label{
  font-size: 18px;;}
button[type=submit]:hover {
  background-color:#3d3c3c;}
  .form-title a, .form-title h2{
   display: inline-block;
   
  }
  .form-title a{
      text-decoration: none;
      font-size: 20px;
      background-color: green;
      color: honeydew;
      padding: 2px 10px;
  }
 
</style>
</head>
<body>
<!--====form section start====-->
<div class="user-detail form">
    <div class="form-title">
    <h1 style="text-align:center;">MY ORDERS</h1>
    
    
    </div>
 
<p style="color:red"><?php if(!empty($msg)){echo $msg; }?></p>
<form method="post" action="">
          <label>ID:</label>
          <input type="text" placeholder="Enter the id" name="id" value="<?php echo $row['id'];?>" / >
          <label>PRODUCT NAME:</label>
          <input type="text" placeholder="Enter the name" name="proname" value="<?php echo $row['proname'];?>" / >
          <label> CUSTOMER NAME:</label>
          <input type="text" placeholder="Enter the name" name="cusname" value="<?php echo $row['cusname'];?>" / >
          <label>PHONE:</label>
          <input type="text" placeholder="Enter the phone" name="phone" value="<?php echo $row['phone'];?>" />
         <label>ADDRESS:</label>
         <input type="text" placeholder="Enter the address" name="address" value="<?php echo $row['address'];?>" />
         <label>PRICE:</label>
         <input type="text" placeholder="Enter the price" name="price" value="<?php echo $row['price'];?>" />
          <label>QUANTITY:</label>
         <input type="text" placeholder="Enter the quantity" name="quantity" value="<?php echo $row['quantity'];?>" />
          <button type="submit" name="update">Submit</button>
    </form>
        </div>

<!--====form section start====-->
</body>
</html>