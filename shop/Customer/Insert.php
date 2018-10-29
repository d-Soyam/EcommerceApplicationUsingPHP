<?php
        session_start();
        $Id=$_GET['Id'];
        $con = mysql_connect("localhost","root");
        mysql_select_db("shopping", $con);
        $sql = "select * from Item_Master where ItemId=".$Id."";
        $result = mysql_query($sql,$con);

        while($row = mysql_fetch_array($result))
        {
            $Id=$row['ItemId'];
            $Name=$row['ItemName'];
            $Description=$row['Description'];
            $Price=$row['Price'];
            $Discount=$row['Discount'];
            $Total=$row['Total'];
            $Image=$row['Image'];
        }
            $Qty=$_POST['quantity'];
            $Size=$_POST['size'];
            $CID=$_SESSION['ID'];
            $Net=$Total*$Qty;
            
            

            $sql = "insert into Shopping_Cart (CustomerId,ItemName,Quantity,Size,Price,Total) values(".$CID.",'".$Name."',".$Qty.",'".$Size."',".$Total.",".$Net.")";
            mysql_query ($sql,$con);
            mysql_close ($con);
            echo '<script type="text/javascript">alert("Item Added To the cart");window.location=\'Cart.php\';</script>';

    ?>
