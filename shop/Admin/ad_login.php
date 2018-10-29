<?php
session_start();
$UserName=$_POST['txtUserName'];
$Password=$_POST['txtPassword'];
//$UserType=$_POST['rdType'];
$con = mysql_connect("localhost","root");
mysql_select_db("shopping", $con);
$sql = "select * from Admin_Master where UserName='".$UserName."' and Password='".$Password."'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
header("location:index_2.php");
} 
mysql_close($con);
?>
