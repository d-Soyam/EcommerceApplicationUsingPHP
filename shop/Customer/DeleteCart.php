<?php
$Id=$_GET['CartId'];
	$con = mysql_connect ("localhost","root");
	mysql_select_db("shopping", $con);
	
    $sql = "delete from shopping_cart where CartId='".$Id."'";
	mysql_query ($sql,$con);
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Item Deleted Succesfully");window.location=\'Cart.php\';</script>';
?>
