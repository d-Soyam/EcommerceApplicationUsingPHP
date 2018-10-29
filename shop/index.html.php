<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!--HEAD-->
    <head>
        <title>Dress_Haat | Home</title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css" />
        <link href="CSS/index.css" rel="stylesheet" type="text/css" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        
        <link href="CSS/camera.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="JS/jquery.min.js"></script>
        <script type='text/javascript' src='JS/jquery.mobile.customized.min.js'></script> 
        <script type='text/javascript' src='JS/jquery.easing.1.3.js'></script> 
        <script type='text/javascript' src='JS/camera.min.js'></script>
        <script type="text/javascript"> 
            jQuery(function(){
                jQuery('#Id_1').camera({ 
                    thumbnails:true 
                }); 

                jQuery('#Id_2').camera({ 
                    height: '330px', 
                    loader: 'pie', 
                    pagination: false, 
                    thumbnails: true 
                }); 
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
                <li class="current"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
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
            
            
        
        <div id="header">
            <div class="fluid_container"> 
                <div class="camera_wrap camera_red_skin" id="Id_1"> 
                    <div data-thumb="" data-src="img/slides/slider1.jpg"> 
                        <div class="camera_caption fadeFromBottom"> 
                             Shop from Home 
                        </div> 
                    </div> 
                    <div data-thumb="" data-src="img/slides/slider2.jpg"> 
                        <div class="camera_caption fadeFromBottom"> 
                            New Year Collection 2015 
                        </div> 
                    </div> 
                    <div data-thumb="" data-src="img/slides/slider3.jpg"> 
                        <div class="camera_caption fadeFromBottom"> 
                            Enjoy This Winter 
                        </div> 
                    </div> 
                    <div data-thumb="" data-src="img/slides/slider4.jpg"> 
                        <div class="camera_caption fadeFromBottom"> 
                            Winter Collection 2014 
                        </div> 
                    </div> 
                    <div data-thumb="" data-src="img/slides/slider5.jpg"> 
                        <div class="camera_caption fadeFromBottom"> 
                            Celebrate New Year
                        </div> 
                    </div>
                    <div data-thumb="" data-src="img/slides/slider6.jpg"> 
                        <div class="camera_caption fadeFromBottom"> 
                            Upcoming Collections
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!---------------------------------->
            
        
        
        <div id="content">
            <h2>Popular Items</h2>
                
            <div class="sp-products-grids">
                <table style="padding-left:30px"><tr><td>
                <div class="sp-products-grid">
                    <a class="pro-here"><img src="img/shirt.jpg" /></a>
                    <a class="pro-btn" href="Products.php?CategoryId=1"><span>SHIRT&nbsp;</span> VIEW MORE</a>
                </div>
                </td><td>
                <div class="sp-products-grid">
                    <a class="pro-here"><img src="img/images.jpg" /></a>
                    <a class="pro-btn" href="Products.php?CategoryId=2"><span>T-SHIRT&nbsp;</span> VIEW MORE</a>
                </div>
                </td><td>
                <div class="sp-products-grid">
                    <a class="pro-here"><img src="img/polo.jpg" /></a>
                    <a class="pro-btn" href="Products.php?CategoryId=3"><span>POLO-SHIRT&nbsp;</span> VIEW MORE</a>
                </div>
                </td></tr>
                <tr><td>
                <div class="sp-products-grid">
                    <a class="pro-here"><img src="img/panjabi.jpg" /></a>
                    <a class="pro-btn" href="Products.php?CategoryId=4"><span>PANJABI&nbsp;</span> VIEW MORE</a>
                </div>
                </td><td>
                <div class="sp-products-grid">
                    <a class="pro-here"><img src="img/3.jpg" /></a>
                    <a class="pro-btn" href="Products.php?CategoryId=7"><span>KAMEEZ&nbsp;</span> VIEW MORE</a>
                </div>
                </td><td>
                <div class="sp-products-grid">
                    <a class="pro-here"><img src="img/sharee1.jpg" /></a>
                    <a class="pro-btn" href="Products.php?CategoryId=8"><span>SHAREE&nbsp;</span> VIEW MORE</a>
                </div>
                </td></tr></table>
            </div>
            
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
