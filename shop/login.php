
<?php
session_start();
$UserName=$_POST['txtUserName'];
$Password=$_POST['txtPassword'];

$con = mysql_connect("localhost","root");
mysql_select_db("shopping", $con);
$sql = "select * from Customer_Registration where UserName='".$UserName."' and Password='".$Password."' ";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
    echo '<script type="text/javascript">alert("Wrong Username or Password");window.location=\'index.php\';</script>';
}
else
{
$_SESSION['ID']=$row['CustomerId'];
$_SESSION['Name']=$row['CustomerName'];
header("location:Customer/index.php");
} 
mysql_close($con);


?>
