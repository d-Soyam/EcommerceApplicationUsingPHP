<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <!--HEAD-->
    <head>
        <title>Dress_Haat | Contact</title>
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
                <li class="current"><a href="Contact.php">Contact</a></li>
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
            <h2>Contact Us</h2>
            <table width="92%" border="0" cellpadding="0" cellspacing="0" style="padding-left:30px">
                <tr>
                    <td bgcolor=#F08080>&nbsp;Head Office</td>
                    <td bgcolor=#F08080>Branch Office</td>
                </tr>
                <tr>
                    <td>Dress_Haat<br/>Elephant Road<br/>Dhaka</td>
                    <td>Dress_Haat<br/>New Market<br/>Chittagong</td>
                </tr>
                <tr>
                    <td>Phone: 079-222222</td>
                    <td>Phone: 02762-222222</td>
                </tr>
                <tr>
                    <td>Email: dress_haat_head@gmail.com</td>
                    <td>Email: dress_haat_brnc@gmail.com</td>
                </tr>
            </table>
        </div>
        <!---------------------------------->
            
            
        <?php
            include "Right.php";
        ?>
        <!---------------------------------->
  
        <div style="clear:both;"></div>
        <?php
            include "Footer.php";
        ?>
        <!---------------------------------->
        
        </div>
        
    </body>  
</html>
