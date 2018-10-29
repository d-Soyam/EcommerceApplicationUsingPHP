<?php

	//$Valid=$_POST['txtDate'];
	
	$txtName=$_POST['txtName'];
	
	$txtDetail=$_POST['txtDetail'];
	
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("shopping", $con);
	// Specify the query to Insert Record
	$sql = "insert into Offer_master(Offer,Detail) values('".$txtName."','".$txtDetail."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	
	echo '<script type="text/javascript">alert("Offer Created Succesfully");window.location=\'Offers.php\';</script>';

?>

