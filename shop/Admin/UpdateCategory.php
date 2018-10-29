<?php
$Id = $_POST['txtId'];
$Name=$_POST['txtName'];
// Establish Connection with MYSQL
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("shopping", $con);
// Specify the query to Update Record
$sql = "Update Category_Master set CategoryName='".$Name."' where CategoryId=".$Id."";
// Execute query
mysql_query($sql,$con);
// Close The Connection
mysql_close($con);
echo '<script type="text/javascript">alert("Category Updated Succesfully");window.location=\'Category.php\';</script>';
?>
