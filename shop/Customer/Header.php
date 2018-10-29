<?php

    $con = mysql_connect("localhost","root");
    mysql_select_db("shopping", $con);
    $sql = "SELECT shopping_cart.CartId, shopping_cart.ItemName, shopping_cart.Quantity, shopping_cart.Size, shopping_cart.Price, shopping_cart.Total, item_master.Image FROM admin_master, shopping_cart, item_master WHERE item_master.ItemName=shopping_cart.ItemName and shopping_cart.CustomerId=".$_SESSION['ID']."";
    $result = mysql_query($sql,$con);
    $records = mysql_num_rows($result);
?>
<!------------->


<div id="title">
    
    <div id="title_img">
        <img src="img/logo.png" />
    </div>
    <div id="title_log">
        <a href="Cart.php"><img src="img/cart.png"/> Cart(<?php echo $records; ?>)</a> | <a href="Logout.php">Logout</a>
        <br/><br/>
        <div id="title_phone">
            &nbsp;&nbsp;&nbsp;
            +880 1916293975
        </div>
        <div id="title_mail">
            &nbsp;&nbsp;&nbsp;
            help@dress_haat.com
        </div>
    </div>
    
</div>
<!------------->
