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
        <title>Dress_Haat | User Feedback</title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

        <script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
        <link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
        
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
        
            <form id="form1" name="form1" method="post" action="InsertFeedback.php" style="padding-left:30px">
                <table width="95%" height="140" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>Your Feedback:</td>
                    </tr>
                    <tr>
                        <td>
                            <span id="sprytextarea1">
                                <label><textarea name="txtFeedback" id="txtFeedback" cols="45" rows="5"></textarea></label>
                                <span class="textareaRequiredMsg" style="color:red">*</span>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="product-btn" type="submit" name="button" id="button" value="Send" />
                        </td>
                    </tr>
                </table>
            </form>

        </div>
        <!------------->
            
            
            
        <div id="right-col">
            <h2>Menu</h2>

            <ul class="slidedoormenu">
                <li><a href="user_account.php">User Information</a></li>
                <li><a href="Cart.php">My Cart</a></li>
                <li><a href="History.php">Orders History</a></li>
                <li class="current"><a href="Feedback.php">Send Feedback</a></li>
            </ul>
        </div>
        <!---------------------------------->
  
        <div style="clear:both;"></div>
        <?php
            include "Footer.php";
        ?>
        <!---------------------------------->
        
        </div>
        
        
        
        <script type="text/javascript">
            var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
        </script>
        
    </body>  
</html>


</body>
</html>
