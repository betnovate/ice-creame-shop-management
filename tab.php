<?php

include('post.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP CRUD Operations</title>
<style>
   .navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 20px;
  color: white;
  text-align: center;
  padding: 12px 16px;
  text-decoration: none;
}



    
    
     table, td, th {  
      border: 1px solid #ddd;
      text-align: left;
    
    }
    
    table {
      border-collapse: collapse;
      width: 100%;
    }
    .table-data{
      
      width:65%;
      float: right;
    }
    th, td {
      padding: 15px;
       
    }
    table.center {
  margin-left: auto; 
  margin-right: auto;
}
body{
    overflow-x: hidden;
   
}

* {
  box-sizing: border-box;
   

}


.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.delete{
   text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: red;
}
.edit {
    text-decoration: none;
    padding: 2px 5px;
    background: lightgreen;
    color: white;
    border-radius: 3px;
}


</style>
</head>
<body>
    <div class="navbar">
        <center><a href="#">MY ORDERS</a></center>
  
 <button class="button button2"  onclick="location.href='order.php'"  >ADD PRODUCT</button>
<a href="admin.html"><img src="https://cdn2.iconfinder.com/data/icons/commands-1/32/back_arrow_left_go_button_direction_backward-128.png" alt="HTML tutorial" style="width:40px;height:40px;"></a>
    
   
  </div> 
    
    


<div class="table-center">
        <div class="list-title">

          
            </div>

    <table border="1">

        <tr>

            <th>S.N</th>
            <th> PRODUCT NAME</th>
            <th>CUSTOMER</th>
            <th>PHONE</th>
             <th>ADDRESS</th>
            <th>PRICE</th>
             <th>QUANTITY</th>
            <th>Edit</th>
            <th>Delete</th>


        </tr>
        
<?php

        if(count($fetchData)>0){
        $sn=1;
        foreach($fetchData as $row){
            
?> <tr>
<td><?php echo $sn; ?></td>
<td><?php echo $row['proname']; ?></td>
<td><?php echo $row['cusname']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><?php echo $row['quantity']; ?></td>

<td><a href="int1.php?edit=<?php echo $row['id']; ?>" class="edit">Edit</a></td>
<td><a href="del1.php?delete=<?php echo $row['id']; ?>" class="delete">Delete</a></td>
</tr> <?php

      $sn++; }

      }else{
            
?>

      <tr>
        <td colspan="7">No Data Found</td>
      </tr>
                
<?php

    }
?>
 
    </table>
    </div>

</body>
</html>
