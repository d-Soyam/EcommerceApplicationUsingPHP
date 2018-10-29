<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <!--HEAD-->
    <head>
        <title>Dress_Haat | Authority</title>
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
                <li><a href="Category.php">Add Category</a></li>
                <li><a href="Offers.php">Add Offers</a></li>
                <li><a href="Orders.php">View Orders</a></li>	
                <li class="current"><a href="index_2.php">Users List</a></li>	
                <li><a href="Feedback.php">Users Feedbacks</a></li>
            </ul>
        </div>
        <!------------->
            
            
        <div id="content">
            <h2>Users List</h2>
            <table class="CSSTableGenerator" cellpadding="0" cellspacing="0">
            <tr>
              <td>Customer Name</td>
              <td>City</td>
              <td>Gender</td>
              <td>User Name</td>
              <td>Card Type</td>
            </tr>
            <?php
            $con = mysql_connect("localhost","root");
            mysql_select_db("shopping", $con);
            $sql = "select * from customer_registration";
            $result = mysql_query($sql,$con);
            while($row = mysql_fetch_array($result))
            {
                $Name=$row['CustomerName'];
                $City=$row['City'];
                $Gender=$row['Gender'];
                $UN=$row['UserName'];
                $Card_Type=$row['Card'];
?>
            
              <tr>
                <td><?php echo $Name; ?></td>
                <td><?php echo $City; ?></td>
                <td><?php echo $Gender; ?></td>
                <td><?php echo $UN; ?></td>
                <td><?php echo $Card_Type; ?></td>
              </tr>
              
            
            <?php } ?>
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
