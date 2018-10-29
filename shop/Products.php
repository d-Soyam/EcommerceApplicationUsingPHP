<?php require_once('Connections/shop.php'); ?>

<?php
    if (!function_exists("GetSQLValueString")) {
        function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") {
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
    if (isset($_GET['CategoryId'])) {
      $colname_Recordset1 = $_GET['CategoryId'];
    }
    mysql_select_db($database_shop, $shop);
    $query_Recordset1 = sprintf("SELECT ItemName, Description, Color, Fabric, V_A, Quantity, Image, Price, Discount, Total FROM item_master WHERE CategoryId = %s", GetSQLValueString($colname_Recordset1, "int"));
    $Recordset1 = mysql_query($query_Recordset1, $shop) or die(mysql_error());
    $row_Recordset1 = mysql_fetch_assoc($Recordset1);
    $totalRows_Recordset1 = mysql_num_rows($Recordset1);

    mysql_select_db($database_shop, $shop);
    $query_Recordset2 = "SELECT ItemName, Description, Color, Fabric, V_A, Quantity, Image, Price, Discount, Total FROM item_master";
    $Recordset2 = mysql_query($query_Recordset2, $shop) or die(mysql_error());
    $row_Recordset2 = mysql_fetch_assoc($Recordset2);
    $totalRows_Recordset2 = mysql_num_rows($Recordset2);
?>






<!--Start Page-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!--HEAD-->
    <head>
        <title>Dress_Haat | New Arrival</title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        
        <script type="text/javascript" src="JS/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="JS/imagezoom.js"></script>
        <script type="text/javascript" src="JS/jquery.scrollToTop.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $("#toTop").scrollToTop(1000);
            });
        </script>
    </head>
    
    
    
    <!--BODY-->
    <body>
        <div id="wrapper">
        <a href="#top" id="toTop"></a>
        <?php
            include "Header.php";
        ?>
        <div class="invertedshiftdown">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li class="current"><a href="Products.php">New Arrival</a></li>
                <li><a href="Offers.php">Special Offers</a></li>
                <li><a href="store.php">Outlet</a></li>	
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li>
                    <div class="search">
                        <form>
                            <input type="text" value="" placeholder="Search.....">
                            <input type="submit" value="">
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <!------------->
        
        
        <div id="content">
            <h2>Products</h2>

            <div class="special-products-grids">
            <?php
                if(isset($_GET['CategoryId'])) {
                do { ?>
                    <div class="special-products-grid">
                    <table>
                    <tr>
                        <td>
                            <a class="product-here"><img src="Products/<?php echo $row_Recordset1['Image']; ?>" data-imagezoom="true"/></a>
                        </td>
                        <td>
                        <h3>Product Information</h3>
                        <table class="product-details" ccellpadding="0" cellspacing="0">
                            <tr><td class="p-tr1">Title:</td><td class="p-tl1"><?php echo $row_Recordset1['ItemName']; ?></td></tr>
                            <tr><td class="p-tr2">Color:</td><td class="p-tl2"><?php echo $row_Recordset1['Color']; ?></td></tr>
                            <tr><td class="p-tr1">Fabric:</td><td class="p-tl1"><?php echo $row_Recordset1['Fabric']; ?></td></tr>
                            <tr><td class="p-tr2">Value Addition:</td><td class="p-tl2"><?php echo $row_Recordset1['V_A']; ?></td></tr>
                            <tr><td class="p-tr1">Market Rate:</td><td class="p-tl1"><?php echo $row_Recordset1['Price']; ?>/-</td></tr>
                            <tr><td class="p-tr2">Discount:</td><td class="p-tl2"><?php echo $row_Recordset1['Discount']; ?>/-</td></tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                    <a class="product-btn" href="Register.php"><span>BDT= <?php echo $row_Recordset1['Total']; ?>/-</span>ADD TO CART</a>    
                    </div>
                <?php }
                while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
                }
                else { 
		          do { ?>
                    <div class="special-products-grid">
                    <table>
                    <tr>
                        <td>
                            <a class="product-here"><img src="Products/<?php echo $row_Recordset2['Image']; ?>" data-imagezoom="true"/></a>
                        </td>
                        <td>
                        <h3>Product Information</h3>
                        <table class="product-details" ccellpadding="0" cellspacing="0">
                            <tr><td class="p-tr1">Title:</td><td class="p-tl1"><?php echo $row_Recordset2['ItemName']; ?></td></tr>
                            <tr><td class="p-tr2">Color:</td><td class="p-tl2"><?php echo $row_Recordset2['Color']; ?></td></tr>
                            <tr><td class="p-tr1">Fabric:</td><td class="p-tl1"><?php echo $row_Recordset2['Fabric']; ?></td></tr>
                            <tr><td class="p-tr2">Value Addition:</td><td class="p-tl2"><?php echo $row_Recordset2['V_A']; ?></td></tr>
                            <tr><td class="p-tr1">Market Rate:</td><td class="p-tl1"><?php echo $row_Recordset2['Price']; ?>/-</td></tr>
                            <tr><td class="p-tr2">Discount:</td><td class="p-tl2"><?php echo $row_Recordset2['Discount']; ?>/-</td></tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                    <a class="product-btn" href="Register.php"><span>BDT= <?php echo $row_Recordset2['Total']; ?>/-</span>ADD TO CART</a>
                    </div>
                <?php }
                while ($row_Recordset2 = mysql_fetch_assoc($Recordset2));
                } ?>
            </div>
        </div>
        <!------------->    
        
            
        <?php
            include "Right.php";
        ?>
        <!------------->
        <div style="clear:both;"></div>
        <?php
            include "Footer.php";
        ?>
    </div>
    </body>
</html>


<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>
