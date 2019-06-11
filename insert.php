<?PHP
include("connect.php");
$bankusername=$_POST['username'];
$bankpassword=$_POST['password'];
 mysql_query($con,"INSERT Into user(bankusername,password) values(string,string)");

	echo "Inserted";

?>
