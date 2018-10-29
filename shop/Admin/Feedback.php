<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Dress_Haat | Customer Feedback</title>
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
                <li><a href="Orders.php">View Orders</a></li>	
                <li><a href="index_2.php">Users List</a></li>	
                <li class="current"><a href="Feedback.php">Users Feedbacks</a></li>
            </ul>
        </div>
        <!------------->
  
  <div id="content">
      
    <h2>Feedback From Customers</h2>
    <table class="CSSTableGenerator" cellpadding="0" cellspacing="0">
      <tr>
        <td>Id</strong></td>
        <td>Customer Name</strong></td>
        <td>Feedback</strong></td>
        <td>Date</strong></td>
    </tr>
      <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("shopping", $con);
// Specify the query to execute
$sql = "select Feedback_Master.FeedbackId,Customer_Registration.CustomerName,Feedback_Master.Feedback,Feedback_Master.Date from Feedback_Master,Customer_Registration where Feedback_Master.CustomerId=Customer_Registration.CustomerId";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['FeedbackId'];
$Name=$row['CustomerName'];
$Feedback=$row['Feedback'];
$Date=$row['Date'];

?>
      <tr>
        <td><?php echo $Id;?></td>
        <td><?php echo $Name;?></td>
        <td><?php echo $Feedback;?></td>
        <td><?php echo $Date;?></td>
    </tr>
      <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
      <tr>
        <td colspan="5" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
      </tr>
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
