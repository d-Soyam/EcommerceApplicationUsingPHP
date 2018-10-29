<?php
if(!isset($_SESSION))
{
session_start();
}
	$FeedBack=$_POST['txtFeedback'];
	$FDate= date('y/m/d');
	$Id=$_SESSION['ID'];
	
	
	
	$con = mysql_connect ("localhost","root");
	mysql_select_db("shopping", $con);
	$sql = "insert into feedback_master(CustomerId,Feedback,Date) values('".$Id."','".$FeedBack."','".$FDate."')";
	mysql_query ($sql,$con);
	mysql_close ($con);
	
	echo '<script type="text/javascript">alert("Feedback Given Succesfully");window.location=\'Feedback.php\';</script>';

?>
