<!DOCTYPE html>
<?php session_start();?>
<html>
	<head>
		<meta charset="urf-8"/>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
		<title> Lee Tsz Lok Homepage</title>
		<style type="text/css">


	.title{background-color:#e5feff;color:#cbaaff;font-size:30px;font-weight:bold;padding:10px 20px;font-family:"Times New Roman";width:fit-content;}

	.aboutme{font-size:30px;padding:10px;margin:10px;background-color:white;width:180px;text-align:center;line-height:20px;border:none;}

	.contactme{font-size:30px;padding:10px;margin:10px;background-color:white;width:180px;text-align:center;line-height:20px;border:none;}

	.toggle{font-size:30px;padding:10px;margin:10px;border:none;background-color:white;}

	.menu{margin:20px;}

	.hide{display:none;}

	.login{font-size:30px;padding:10px;margin:10px;}

	@media screen and (max-width:600px){
	.aboutme{width:100%;text-align:center;}
	.contactme{width:100%;text-align:center;}
	.title{width:100%;text-align:center;font-size:24px;}

	}
.footer {
   position:fixed;
   bottom:0;
    width:100%;
    display:block;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
overflow:hidden;
background-color:#333;


}

li  {
float:left;
border-right:1px solid #bbb;

}

li a{
display:block;
color:white;
text-align:center;
padding:20px 50px;
text-decoration:underline;
}

li:last-child{
border-right:none;
}

li a:hover:not(.active) {
  background-color: #111;
}


.active {
  background-color: #4CAF50;
  color: white;

}
footer{
    width: 100%;
    height:100px;   
    position:absolute;
    bottom:0px;
    left:0px;
	padding:10px;
    background: #333;
}
		</style>
		<script type="text/javascript">

		</script>

	</head>
	<body style="margin:0px;background-color:#efefef;"">

		<div class="title" Onclick="window.location.href='index.html'"> Lee Tsz Lok </div>	

		<ul>
			<li>
				<a href="http://localhost/home.html">Home</a>
			</li>

			<li>
				<a href="http://localhost/contact.html">Contact</a>
			</li>
			<li>
				<a href="http://localhost/about.html">About</a>
			</li>
			<li style="float:right">
				<a class="active" href="http://localhost/login.html">Login</a>
			</li>
		</ul>


		<?php


$username=$_POST['username'];
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"bank");
$getemail =mysqli_query($conn,"select * from user where username='$username'");
$row=mysqli_fetch_array($getemail);



if($row['username']==$username)
{
	//smtp.netvigator.com
	
	echo"The email will be sent in few minutes. Please check your email to reset your password.";
	$to=$row['email'];
	$subject="My subject";
	$txt="Hello world!";
	echo "A reset password email is sent to " . $row['email'];
	mail($to,$subject,$txt);
	
}


else
{
	echo  '<p class="login">'."Sorry, the username does not exist.". '</p>' ;
	
	 echo '<p class="login">' ."Back to page in 3 secconds". '</p>';
	 
	 header( "refresh:3;url=forgotpassword.html" );
	
}
 




?>


<footer>
			<p style="color:white;">&copy; 2019</p>		
			<p style="color:white;">Posted by Lee Tsz Lok</p>
			<p style="color:white;">Contact information: <a href="mailto:leetszlok909@icloud.com" style="color:white">leetszlok909@icloud.com</a>.</p>
		</footer>



	</body>
</html>
