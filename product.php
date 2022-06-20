<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP CRUD Operations</title>
<style>
    
body{
    overflow-x: hidden;
     background-color: linen;
         font-family: Verdana;
}
* {
  box-sizing: border-box;}
.user-detail form {
    height: 70vh;
    border: 2px solid #f1f1f1;
    padding: 20px;
    background-color: white;
    margin: 0 auto;
  width: 500px;
   
   
};  
   
    
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
input[type=text] {
    background-color: #ddd;
    font-family: Verdana;
    outline: none;
    font-size:15px;
}
button[type=submit] {
    background-color: #434140;
    color: #ffffff;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    font-size:20px;
font-family: Verdana;}
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
    <h1 style="text-align:center;">MY PRODUCTS</h1>
    
    
    </div>
 
<p style="color:red"><?php if(!empty($msg)){echo $msg; }?></p>
<form name="pro" method="post" action="inset.php">
          <label>ID:</label>
          <input type="text" placeholder="Enter the id" name="id" required>
          <label>NAME:</label>
          <input type="text" placeholder="Enter the name" name="name" required>
          <label>QUANTITY:</label>
          <input type="text" placeholder="Enter the quantity" name="quantity" required>
          <label>PRICE:</label>
          <input type="text" placeholder="Enter the price" name="price" required>
         <label>CATEGORY:</label>
         <input type="text" placeholder="Enter the category" name="cat" required>
         
          <button type="submit" name="create">Submit</button>
    </form>
        </div>

<!--====form section start====-->

 
                        
                        
                        
</body>
</html>