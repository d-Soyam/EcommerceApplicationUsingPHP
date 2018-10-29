<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title>Dress_Haat | Edit Category</title>
    <link href="../CSS/style.css" rel="stylesheet" type="text/css" />
    <link href="CSS/table.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    </head>
<body>
<div id="wrapper">
  
  <?php
  include "Header.php";
  ?>
    <div class="invertedshiftdown">
            <ul>
                <li class="current"><a href="Category.php">Add Category</a></li>
                <li><a href="Offers.php">Add Offers</a></li>
                <li><a href="Orders.php">View Orders</a></li>	
                <li><a href="index_2.php">Users List</a></li>	
                <li><a href="Feedback.php">Users Feedbacks</a></li>
            </ul>
        </div>
        <!------------->
            
  
  <div id="content">
    <h2>Category Management</h2>
    <table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
      <tr><td><h3>Edit Category Details</h3></td></tr>
      <tr>
        <td><?php
$Id=$_GET['CatId'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("shopping", $con);
// Specify the query to execute
$sql = "select * from Category_Master where CategoryId=".$Id."";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['CategoryId'];
$Name=$row['CategoryName'];
}
?>
            <form method="post" action="UpdateCategory.php">
              <table width="95%" style="padding-left:30px">
                <tr>
                  <td height="32"><span class="style8">Category Id:</span></td>
                  <td><span id="sprytextfield1">
                    <label>
                    <?php echo $Id;?>
                        <input type="hidden" name="txtId" value="<?php echo $Id;?>" />
                    </label>
                </tr>
                <tr>
                  <td height="36"><span class="style8">Category Name:</span></td>
                  <td><span id="sprytextfield2">
                    <label>
                    <input name="txtName" type="text" id="txtName" value="<?php echo $Name;?>" />
                    </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>
                
                <tr>
                  <td></td>
                  <td><input class="product-btn" type="submit" name="submit" value="Update" /></td>
                </tr>
</table>
            </form>
            <?php
// Close the connection
mysql_close($con);
?>
            </td>
      </tr>
      <tr>
        <td></td>
      </tr>
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
<script type="text/javascript">
<!--
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
//-->
</script>
</body>
</html>
