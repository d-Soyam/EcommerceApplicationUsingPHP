<?php

	$Id=$_GET['CatId'];
	$con = mysql_connect ("localhost","root");
	mysql_select_db("shopping", $con);

    $sql = "delete from Category_Master where CategoryId='".$Id."'";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Category Deleted Succesfully");window.location=\'Category.php\';</script>';

?>
