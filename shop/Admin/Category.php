<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title>Dress_Haat | Category Management</title>
    <link href="../CSS/style.css" rel="stylesheet" type="text/css" />
        <link href="CSS/table.css" rel="stylesheet" type="text/css"/>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    
    <script type="text/javascript" src="../JS/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../JS/jquery.scrollToTop.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#toTop").scrollToTop(1000);
        });
    </script>
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
    <div id="wrapper">
        <a href="#top" id="toTop"></a>

      <?php
      include "Header.php";
      ?>
        <div class="invertedshiftdown">
            <ul>
                <li class="current"><a href="Category.php">Add Category</a></li>
                <li><a href="Offers.php">Add Offers</a></li>
                <li><a href="Orders.php">View Orders</a></li>	
                <li><a href="Orders.php">Users List</a></li>	
                <li><a href="Feedback.php">Users Feedbacks</a></li>
            </ul>
        </div>
        <!------------->
      <div id="content">
        <h2>Category Management</h2>
        <table width="95%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <h3>Create New Category</h3>
          </tr>
          <tr>
            <td height="26">
                <form action="InsertCategory.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                <table width="95%" cellpadding="0" cellspacing="0" style="padding-left:30px">
                  <tr>
                    <td height="32" >Category Name:</td>
                    <td><span id="sprytextfield1">
                      <label>
                      <input type="text" name="txtName" id="txtName" />
                      </label>
                      <span class="textfieldRequiredMsg" style="color:red">Enter Category.</span></span></td>
                  </tr>
                  
                  <tr>
                    <td height="34">Upload Image:</td>
                    <td><label>
                      <input type="file" name="txtFile" id="txtFile" />
                    </label></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><label>
                      <input class="product-btn" type="submit" name="button" id="button" value="Submit" />
                    </label></td>
                  </tr>
                    <tr>
                    <td>&nbsp;</td>

                  </tr>
                </table>
            </form></td>
          </tr>
          <tr>
              <td><h3>Category List</h3></td>
          </tr>
          <tr>
            <td><table class="CSSTableGenerator" cellpadding="0" cellspacing="0">
                <tr>
                  <td>Category Name</td>
                    <td>Edit</td>
                  <td>Delete</td>
                </tr>
                <?php
    $con = mysql_connect("localhost","root");
    mysql_select_db("shopping", $con);
    $sql = "select * from Category_Master";
    $result = mysql_query($sql,$con);
    while($row = mysql_fetch_array($result))
    {
        $Id=$row['CategoryId'];
    $CategoryName=$row['CategoryName'];
    
    ?>
                <tr>
                  <td><?php echo $CategoryName;?></td>
                  <td><a href="EditCategory.php?CatId=<?php echo $Id;?>">Edit</a></td>
                  <td><a href="DeleteCategory.php?CatId=<?php echo $Id;?>"><img src="img/delete.png"/> </a></td>
                </tr>
                <?php
    }
    $records = mysql_num_rows($result);
    ?>
                <tr>
                  <td colspan="5" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." type items"; ?> </div></td>
                </tr>
                <?php
    // Close the connection
    mysql_close($con);
    ?>
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
</script>
</body>
</html>
