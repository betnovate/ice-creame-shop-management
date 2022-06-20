<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP CRUD Operations</title>
<style>
    
body{
    overflow-x: hidden;
     background-color: linen
}
* {
  box-sizing: border-box;}
.user-detail form {
    height: 80vh;
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
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
    font-family: Verdana;
   
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
 .select-css {
  display: inline-block;
  font-size: 16px;
  font-family: sans-serif;
  font-weight: 700;
  color: #444;
  line-height: 1.3;
  padding: .6em 1.4em .5em .8em;
  width: 100%;
  max-width: 100%; /* useful when width is set to anything other than 100% */
  box-sizing: border-box;
  margin: 0;
  border: 1px solid #aaa;
  box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
  border-radius: .5em;
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  background-color: #fff;}
</style>
</head>
<body>
<!--====form section start====-->
<div class="user-detail form">
    <div class="form-title">
    <h1 style="text-align:center;">MY STOCK</h1>
    
    
    </div>
 
<p style="color:red"><?php if(!empty($msg)){echo $msg; }?></p>
<form  method="post" action="fiill.php">
          <label>ID:</label>
          <input type="text" placeholder="Enter the id" name="id" >
          <label>PRODUCT NAME:</label>
          <input type="text" placeholder="Enter the name" name="raw" >
          <label>QUANTITY:</label>
          <input type="text" placeholder="Enter the quantity" name="quantity" >
          <label>PRICE:</label>
          <input type="text" placeholder="Enter the price" name="price" >
         <label>SUPPLIER:</label>
         <input type="text" placeholder="Enter the supplier" name="supplier" >
         <label>CONTACT:</label>
         <input type="text" placeholder="Enter the contact" name="contact"  >
          <button type="submit" name="create">Submit</button>
    </form>
        </div>

<!--====form section start====-->

 
                        
                        
                        
</body>
</html>