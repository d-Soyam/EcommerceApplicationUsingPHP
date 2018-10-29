<?php require_once('../Connections/shop.php'); ?>
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

mysql_select_db($database_shop, $shop);
$query_Recordset1 = "SELECT CategoryId, CategoryName FROM category_master";
$Recordset1 = mysql_query($query_Recordset1, $shop) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

$colname_Recordset2 = "-1";
if (isset($_GET['CategoryId'])) {
  $colname_Recordset2 = $_GET['CategoryId'];
}
mysql_select_db($database_shop, $shop);
$query_Recordset2 = sprintf("SELECT ItemId, CategoryId, ItemName, Image, Price, Discount, Total FROM item_master WHERE CategoryId = %s", GetSQLValueString($colname_Recordset2, "int"));
$Recordset2 = mysql_query($query_Recordset2, $shop) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Dress_Haat | Add Category Product</title>
<link href="../CSS/style.css" rel="stylesheet" type="text/css" />
    <link href="CSS/table.css" rel="stylesheet" type="text/css"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
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
                <li><a href="Orders.php">Users List</a></li>	
                <li><a href="Feedback.php">Users Feedbacks</a></li>
            </ul>
        </div>
        <!------------->
  
  <div id="content">
    <h2>Add Categorized Products</span></h2>
    <table width="100%" height="364" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <h3>Add product</h3>
      </tr>
      <tr>
        <td><form action="InsertProduct.php?CategoryId=<?php echo $_GET['CategoryId'];?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
          <table width="100%" height="301" border="0" cellpadding="0" cellspacing="0">
            
            <tr>
              <td height="40">Item Name:</td>
              <td><span id="sprytextfield1">
                <label>
                <input type="text" name="txtName" id="txtName" />
                </label>
                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
            </tr>
            <tr>
              <td height="66">Description:</td>
              <td><span id="sprytextarea1">
                <label>
                <textarea name="txtDesc" id="txtDesc" cols="35" rows="3"></textarea>
                </label>
                <span class="textareaRequiredMsg">A value is required.</span></span></td>
            </tr>
              <tr>
              <td height="40">Color:</td>
              <td><span id="sprytextfield1">
                <label>
                <input type="text" name="txtColor" id="txtName" />
                </label>
                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
            </tr>
              <tr>
              <td height="40">Fabric:</td>
              <td><span id="sprytextfield1">
                <label>
                <input type="text" name="txtFabric" id="txtName" />
                </label>
                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
            </tr>
              <tr>
              <td height="40">Value Addition:</td>
              <td><span id="sprytextfield1">
                <label>
                <input type="text" name="txtName" id="txtVA" />
                </label>
                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
            </tr>
              <tr>
              <td height="40">Quantity:</td>
              <td><span id="sprytextfield1">
                <label>
                <input type="text" name="txtName" id="txtQun" />
                </label>
                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
            </tr>
            <tr>
              <td>Upload Image:</td>
              <td><label>
                <input type="file" name="txtFile" id="txtFile" />
              </label></td>
            </tr>
            
            <tr>
              <td height="40">Price:</td>
              <td><span id="sprytextfield3">
                <label>
                <input type="text" name="txtPrice" id="txtPrice" />
                </label>
                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
            </tr>
            <tr>
              <td height="40">Discount:</td>
              <td><span id="sprytextfield4">
                <label>
                <input type="text" name="txtDiscount" id="txtDiscount" />
                </label>
                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
            </tr>
            <tr>
              <td height="40">Final Price:</td>
              <td><span id="sprytextfield5">
                <label>
                <input type="text" name="txtFinal" id="txtFinal" />
                </label>
                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><label>
                <input type="submit" name="button" id="button" value="Submit" />
              </label></td>
            </tr>
          </table>
                </form>
        </td>
      </tr>
      <tr>
          <td>
        <h3>Products in this List</h3>
              </td>
      </tr>
      <tr>
        <td>&nbsp;
          <table class="CSSTableGenerator" cellpadding="0" cellspacing="0">
            <tr>
              <td>Item Id</td>
              <td>Category Id</td>
              <td>ItemName</td>
              <td>Image</td>
              <td>Price</td>
              <td>Discount</td>
              <td>Total</td>
            </tr>
            <?php do { ?>
              <tr>
                <td><?php echo $row_Recordset2['ItemId']; ?></td>
                <td><?php echo $row_Recordset2['CategoryId']; ?></td>
                <td><?php echo $row_Recordset2['ItemName']; ?></td>
                <td><img src="../Products/<?php echo $row_Recordset2['Image']; ?>" height="125px" width="125px"/></td>
                <td><?php echo $row_Recordset2['Price']; ?></td>
                <td><?php echo $row_Recordset2['Discount']; ?></td>
                <td><?php echo $row_Recordset2['Total']; ?></td>
              </tr>
              <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
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
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
</script>
</body>
</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>
