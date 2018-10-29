    <?php
        session_start();
        $con = mysql_connect ("localhost","root");
        mysql_select_db("shopping", $con);
        
        $sql = "insert into Shopping_Cart_Final(CustomerID,ItemName,Size,Quantity,Price,Total)  select CustomerID,ItemName,Quantity,Size,Price,Total from Shopping_Cart where CustomerID=".$_SESSION['ID']."";
        
        mysql_query ($sql,$con);
        mysql_close ($con);
        $con = mysql_connect ("localhost","root");
        mysql_select_db("shopping", $con);
        $sql = "delete from Shopping_Cart where CustomerID=".$_SESSION['ID']."";
        mysql_query ($sql,$con);
        mysql_close ($con);

        echo '<script type="text/javascript">alert("Thank You For Your order");window.location=\'Cart.php\';</script>';

        ?>
