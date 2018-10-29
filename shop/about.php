<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!--HEAD-->
    <head>
        <title>Dress_Haat | About</title>
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
                <li class="current"><a href="about.php">About</a></li>
                <li><a href="Products.php">New Arrival</a></li>
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
            <h2>Welcome to Dress_Haat Fashion House</h2>
            <p align="justify">Upholding products and indigenous crafts and styles of Bangladesh and empowering rural artisans,
                Dress_Haat is more than just a retail chain. The true value of this globally reputed brand lies in the positive
                impact it has on the lives of people reaches every day.
            </p>
            <p align="justify">Today, Dress_Haat serves through 13 retail stores across the country and employs more than 65,000
                rural Bangadeshi artisans, of which 85 per cent are women. Dress_Haat believes in setting high standards for the
                quality and craftsmanship of its products and designs. It sets the trend of blending the traditional with the
                contemporary, which revitalized consumers interest in Bangladeshi products and designs. At Dress_Haat, we aspire to
                bring all that we love about Bangladesh to customers around the world.
            </p>
            
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
