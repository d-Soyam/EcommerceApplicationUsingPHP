<?php require_once('../Connections/shop.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_Recordset1 = "-1";
if (isset($_GET['CustomerId'])) {
  $colname_Recordset1 = $_GET['CustomerId'];
}
mysql_select_db($database_shop, $shop);
$query_Recordset1 = sprintf("SELECT CustomerName, Address, City, Email, Mobile, Gender FROM customer_registration WHERE CustomerId = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $shop) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Dress_Haat</title>
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
    <h2>Shipping Address Detail</h2>
    
    
    <table width="95%" cellspacing="0" cellpadding="0" style="padding-left:30px">
        
      </tr>
      <?php do { ?>
        <tr>
            <td class="p-tr1">CustomerName</td> 
            <td class="p-tr1"><?php echo $row_Recordset1['CustomerName']; ?></td>
        </tr>
        <tr>
            <td class="p-tr2">Address</td>  
            <td class="p-tr2"><?php echo $row_Recordset1['Address']; ?></td>
        </tr>
        <tr>
            <td class="p-tr1">City</td> 
            <td class="p-tr1"><?php echo $row_Recordset1['City']; ?></td>
        </tr>
       <tr>
           <td class="p-tr2">Email</td> 
            <td class="p-tr2"><?php echo $row_Recordset1['Email']; ?></td>
        </tr>
        <tr>
            <td class="p-tr1">Mobile</td>  
            <td class="p-tr1"><?php echo $row_Recordset1['Mobile']; ?></td>
        </tr>
        <tr>
            <td class="p-tr2">Gender</td> 
            <td class="p-tr2"><?php echo $row_Recordset1['Gender']; ?></td>
        </tr>
        <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
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
<?php
mysql_free_result($Recordset1);
?>
