<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
    <!--HEAD-->


    <head>
        <title>Dress_Haat | Special Offers</title>
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
                <li class="current"><a href="Offers.php">Special Offers</a></li>
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
            <h2>Offers of this Month</h2>
            <ul>

        <?php
        $con = mysql_connect("localhost","root");
        mysql_select_db("shopping", $con);
        $sql = "select * from Offer_Master";
        $result = mysql_query($sql,$con);
        while($row = mysql_fetch_array($result))
        {
        $Id=$row['OfferId'];
        $Offer=$row['Offer'];
        $Detail=$row['Detail'];
        $Valid=$row['Valid'];
        ?>

        <li><?php echo $Offer;?> : <?php echo $Detail;?>: <?php echo $Valid;?></li>


        <?php
        }
        $records = mysql_num_rows($result);
        if ($records==0){
            echo "No available offer.";
        }
        mysql_close($con);
        ?>
            </ul>

        </div>
        <!------------------------------>
            
        <?php
            include "Right.php";
        ?>
        <div style="clear:both;"></div>
        <!------------------------------>
            
        <?php
            include "Footer.php";
        ?>
        </div>
    </body>   
</html>
