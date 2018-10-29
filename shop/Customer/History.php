<?php
if(!isset($_SESSION))
{
session_start();
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!--HEAD-->
    <head>
        <title>Dress_Haat | Order History</title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="CSS/table.css" rel="stylesheet" type="text/css" />
        
        <script type="text/javascript" src="JS/jquery-1.11.1.min.js"></script>
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
                <li><a href="Products.php">New Arrival</a></li>
                <li><a href="Offers.php">Special Offers</a></li>
                <li><a href="store.php">Outlet</a></li>	
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li class="current"><a href="user_account.php">Account</a></li>
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
            <table width="95%">
                <tr>
                    <td><h2>My Account</h2></td>
                    <td><h3 style="float:right">Hello! <?php echo $_SESSION['Name'];?></h3></td>
                </tr>
            </table>
            <!------------->
            
            <table class="CSSTableGenerator" cellpadding="0" cellspacing="0">
            <tr>
                <td>Image</strong></td>
                <td>Title</td>
                <td>Size</td>
                <td>Unit Price</td>
                <td>Quantity</td>
                <td>Total Price</td>
                
            </tr>
          
            <?php
            $con = mysql_connect("localhost","root");
            mysql_select_db("shopping", $con);
            $sql = "SELECT shopping_cart_final.CustomerId, shopping_cart_final.ItemName, shopping_cart_final.Size, shopping_cart_final.Quantity, shopping_cart_final.Price, shopping_cart_final.Total, item_master.Image FROM shopping_cart_final, item_master WHERE item_master.ItemName=shopping_cart_final.ItemName and shopping_cart_final.CustomerId=".$_SESSION['ID']."";
            $result = mysql_query($sql,$con);
            while($row = mysql_fetch_array($result))
            {
                $Id=$row['CustomerId'];
                $ItemName=$row['ItemName'];
                $Size=$row['Size'];
                $Quantity=$row['Quantity'];
                $Total=$row['Total'];
                $Unit=$row['Price'];
                $Image=$row['Image'];
            ?>
            <tr>
                <td><img src="../Products/<?php echo $Image;?>" width="100px" height="100px" /></td>
                <td><?php echo $ItemName;?></td>
                <td><?php echo $Size;?></td>
                <td><?php echo $Unit;?></td>
                <td><?php echo $Quantity;?></td>
                <td><?php echo $Total;?></td>
                
            </tr>
            
            <?php
            }
            $records = mysql_num_rows($result);
            if ($records==0){
                echo "No Previous Order History.";
            }
            mysql_close($con);
            ?>
            </table>
        </div>
        <!------------->
            
            
            
        <div id="right-col">
            <h2>Menu</h2>

            <ul class="slidedoormenu">
                <li><a href="user_account.php">User Information</a></li>
                <li><a href="Cart.php">My Cart</a></li>
                <li class="current"><a href="History.php">Orders History</a></li>
                <li><a href="Feedback.php">Send Feedback</a></li>
            </ul>
        </div>
        <!---------------------------------->
  
        <div style="clear:both;"></div>
        <?php
            include "Footer.php";
        ?>
        <!---------------------------------->
        
        </div>
        
    </body>  
</html>
