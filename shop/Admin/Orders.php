<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Dress_Haat | Customer Orders</title>
<link href="../CSS/style.css" rel="stylesheet" type="text/css" />
    <link href="CSS/table.css" rel="stylesheet" type="text/css"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<div id="wrapper">
  
  <?php
  include "Header.php";
  ?>
    <div class="invertedshiftdown">
            <ul>
                <li><a href="Category.php">Add Category</a></li>
                <li><a href="Offers.php">Add Offers</a></li>
                <li class="current"><a href="Orders.php">View Orders</a></li>	
                <li><a href="index_2.php">Users List</a></li>	
                <li><a href="Feedback.php">Users Feedbacks</a></li>
            </ul>
        </div>
        <!------------->
  
  <div id="content">
      
    <h2>Recent Orders</h2>
    <table class="CSSTableGenerator" cellpadding="0" cellspacing="0">
      <tr>
        <td>ID</td>
        <td>Customer Name</strong></td>
        <td>Item Name</td>
       
        <td>Quantity</td>
        <td>Price</td>
        <td>Total</td>
      
        <td>Shipping Address</td>
      </tr>
      <?php
	  session_start();
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("shopping", $con);
// Specify the query to execute
$sql = "SELECT customer_registration.CustomerId, customer_registration.CustomerName, shopping_cart_final.ItemName, shopping_cart_final.Quantity, shopping_cart_final.Price, shopping_cart_final.Total 
FROM customer_registration, shopping_cart_final
WHERE customer_registration.CustomerId=shopping_cart_final.CustomerId ";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['CustomerId'];
$CustomerName=$row['CustomerName'];
$ItemName=$row['ItemName'];
$Quantity=$row['Quantity'];
$Price=$row['Price'];
$Total=$row['Total'];

?>
      <tr>
        <td><?php echo $Id;?></td>
        <td><?php echo $CustomerName;?></td>
        <td><?php echo $ItemName;?></td>
        <td><?php echo $Quantity;?></td>
        <td><?php echo $Price;?></td>
        <td><?php echo $Total;?></td>
        
        <td><a href="Detail.php?CustomerId=<?php echo $Id;?>">Shipping Address</a></td>
      </tr>
      <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
      <?php
// Close the connection
mysql_close($con);
?>
    </table>
    
  </div>
 <?php
 include "Right.php";
 ?>
  <div style="clear:both;"></div>
   <?php
 include "Footer.php";
 ?>
</div>
</body>
</html>
