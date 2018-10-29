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
        <title>Dress_Haat | Add to Cart</title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        
        <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
        <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
        
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
                <li class="current"><a href="Products.php">New Arrival</a></li>
                <li><a href="Offers.php">Special Offers</a></li>
                <li><a href="store.php">Outlet</a></li>	
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="user_account.php">Account</a></li>
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
          <h2>Add Item To Cart</h2>
          
            <?php
            $Id=$_GET['ItemId'];
            $con = mysql_connect("localhost","root");
            mysql_select_db("shopping", $con);
            $sql = "select * from Item_Master where ItemId=".$Id."";
            $result = mysql_query($sql,$con);
            while($row = mysql_fetch_array($result))
            {
                $Id=$row['ItemId'];
                $Name=$row['ItemName'];
                $Description=$row['Description'];
                $Color=$row['Color'];
                $Fabric=$row['Fabric'];
                $VA=$row['V_A'];
                $Stock=$row['Quantity'];
                $Price=$row['Price'];
                $Discount=$row['Discount'];
                $Total=$row['Total'];
                $Image=$row['Image'];
            }
            ?>
          
            <form id="form1" name="form1" method="post" action="Insert.php?Id=<?php echo $Id;?>">
          
            <div class="special-products-grid">
                <table>
                    <tr>
                        <td>
                            <a class="product-here"><img src="../Products/<?php echo $Image; ?>"/></a>
                        </td>
                        <td>
                        <h3>Detailed Information</h3>
                        <table class="product-details" ccellpadding="0" cellspacing="0">
                            <tr><td class="p-tr1">Title:</td><td class="p-tl1"><?php echo $Name; ?></td></tr>
                            <tr><td class="p-tr2">Description:</td><td class="p-tl2"><?php echo $Description; ?></td></tr>
                            <tr><td class="p-tr1">Color:</td><td class="p-tl1"><?php echo $Color; ?></td></tr>
                            <tr><td class="p-tr2">Fabric:</td><td class="p-tl2"><?php echo $Fabric; ?></td></tr>
                            <tr><td class="p-tr1">Value Addition:</td><td class="p-tl1"><?php echo $VA; ?></td></tr>
                            <tr><td class="p-tr2">Market Rate:</td><td class="p-tl2"><?php echo $Price; ?></td></tr>
                            <tr><td class="p-tr1">Discount:</td><td class="p-tl1"><?php echo $Discount; ?></td></tr>
                            <tr><td class="p-tr2">Price:</td><td class="p-tl2"><?php echo $Total; ?></td></tr>
                            <tr><td class="p-tr1">In Stock:</td><td class="p-tl1"><?php echo $Stock; ?> Piece</td></tr>
                            <?php
                                if($Stock>0){
                                    $x="Available";
                            ?>
                            <tr><td bgcolor="#66FF33" class="p-tr2">Status:</td><td bgcolor="#66FF33"><?php echo $x;?></td></tr>
                            <?php
                                }
                                else{
                                    $x="Not Available";
                            ?>
                            <tr><td bgcolor="#FF6600" class="p-tr2">Status:</td><td bgcolor="#FF6600"><?php echo $x;?></td></tr>
                            <?php
                                }
                            ?>
                        </table>
                        </td>
                    </tr>
                    </table>
              </div>
              
                <?php
                    if($Stock>0){
                ?>
                <table width="40%" style="padding-left:30px;">
                    <h4>Available Options:</h4>
                    <tr>
                        <td>Size:</td>
                        <td><label>
                            <select name="size">
                                <option>Extra Large</option>
                                <option>Large</option>
                                <option>Medium</option>
                                <option>Small</option>
                            </select>
                        </label></td>
                        <td>Quantity:</td>
                        <td><label>
                            <select name="quantity">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </label></td>
                        <td>
                            <input class="product-btn" type="submit" name="button" id="button" value="Add To Cart" />
                        </td>
                    </tr>
                </table>
                <?php
                    }
                ?>
        </form>
      </div>
      <!---------------------->   
            
            
         <?php
            include "Right.php";
         ?>
        <!----------------------> 
            
            
        <div style="clear:both;"></div>
        <?php
            include "Footer.php";
        ?>
        <!---------------------->
        </div>
        
        <script type="text/javascript">
        var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
        </script>
</body>
</html>
