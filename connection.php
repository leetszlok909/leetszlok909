<?php




$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"bank");


if(!$conn)
        die("Failed to login");

?>