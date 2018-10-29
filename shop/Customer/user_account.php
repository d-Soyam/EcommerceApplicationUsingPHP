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
        <title>Dress_Haat | User_Account</title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        
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
            
            <?php
            $con = mysql_connect("localhost","root");
            mysql_select_db("shopping", $con);
            $sql = "select * from customer_registration where CustomerId=".$_SESSION['ID']."";
            $result = mysql_query($sql,$con);
            while($row = mysql_fetch_array($result))
            {
                $ID=$row['CustomerId'];
                $Name=$row['CustomerName'];
                $Address=$row['Address'];
                $City=$row['City'];
                $Email=$row['Email'];
                $Mobile=$row['Mobile'];
                $Gender=$row['Gender'];
                $Birthdate=$row['BirthDate'];
                $UN=$row['UserName'];
                $Card_Type=$row['Card'];
                $CardN=$row['CardNm'];
                $Tr=$row['Trans'];
            }
            ?>
            <!------------->
            <h3>Personal Informations:</h3>
                <table class="product-details" ccellpadding="0" cellspacing="0">
                    <tr><td class="p-tr1">Name:</td><td class="p-tl1"><?php echo $Name; ?></td></tr>
                    <tr><td class="p-tr2">Address:</td><td class="p-tl2"><?php echo $Address; ?></td></tr>
                    <tr><td class="p-tr1">City:</td><td class="p-tl1"><?php echo $City; ?></td></tr>
                    <tr><td class="p-tr2">Email:</td><td class="p-tl2"><?php echo $Email; ?></td></tr>
                    <tr><td class="p-tr1">Mobile:</td><td class="p-tl1">+880 <?php echo $Mobile; ?></td></tr>
                    <tr><td class="p-tr2">Gender:</td><td class="p-tl2"><?php echo $Gender; ?></td></tr>
                    <tr><td class="p-tr1">Birthdate:</td><td class="p-tl1"><?php echo $Birthdate; ?></td></tr>
                    <tr><td class="p-tr2">User Name:</td><td class="p-tl2"><?php echo $UN; ?></td></tr>
                    <tr><td class="p-tr1">Card Type:</td><td class="p-tl1"><?php echo $Card_Type; ?></td></tr>
                    <tr><td class="p-tr2">Card Number:</td><td class="p-tl2"><?php echo $CardN; ?></td></tr>
                    <tr><td class="p-tr1">Transaction PIN:</td><td class="p-tl1"><?php echo $Tr; ?></td></tr>
                    <tr><td></td><td>&nbsp;</td></tr>
                </table>
            </div>
        <!------------->
           
            
            
        <div id="right-col">
            <h2>Menu</h2>

            <ul class="slidedoormenu">
                <li class="current"><a href="user_account.php">User Information</a></li>
                <li><a href="Cart.php">My Cart</a></li>
                <li><a href="History.php">Orders History</a></li>
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
