<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Dress_Haat</title>
<link href="../CSS/style.css" rel="stylesheet" type="text/css" />
    <link href="CSS/table.css" rel="stylesheet" type="text/css"/>
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
                <li><a href="Category.php">Add Category</a></li>
                <li><a href="Offers.php">Add Offers</a></li>
                <li><a href="Orders.php">View Orders</a></li>	
                <li><a href="index_2.php">Users List</a></li>	
                <li><a href="Feedback.php">Users Feedbacks</a></li>
            </ul>
        </div>
        <!------------->
  <div id="content">
    <h2>User Management</h2>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
          <td><h3>Create New User</h3></td>
      </tr>
      <tr>
        <td height="26"><form id="form1" name="form1" method="post" action="InsertUser.php">
            <table width="95%"  border="0" cellpadding="0" cellspacing="0" style="padding-left:30px">
              <tr>
                <td height="32" >User Name:</td>
                <td><span id="sprytextfield1">
                  <label>
                  <input type="text" name="txtUserName" id="txtUserName" />
                  </label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td height="34">Password:</td>
                <td><span id="sprytextfield2">
                  <label>
                  <input type="password" name="txtPassword" id="txtPassword" />
                  </label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><label>
                  <input class="product-btn" type="submit" name="button" id="button" value="Submit" />
                </label></td>
              </tr>
</table>
        </form></td>
      </tr>
      <tr>
          <td><h3>User List</h3></td>
      </tr>
      <tr>
        <td><table class="CSSTableGenerator" cellpadding="0" cellspacing="0" >
            <tr>
              <td>Id</td>
              <td>UserName</td>
              <td><strong>Edit</td>
              <td>Delete</th>
            </tr>
            <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("shopping", $con);
// Specify the query to execute
$sql = "select * from admin_master";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['AdminId'];
$UserName=$row['UserName'];

?>
            <tr>
              <td><?php echo $Id;?></strong></div></td>
              <td><?php echo $UserName;?></strong></div></td>
              <td><a href="EditUser.php?AdminId=<?php echo $Id;?>">Edit</a></td>
              <td><a href="DeleteUser.php?AdminId=<?php echo $Id;?>"><img src="img/delete.png"/> </a></td>
            </tr>
            <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
            <tr>
              <td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
            </tr>
            <?php
// Close the connection
mysql_close($con);
?>
        </table></td>
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
