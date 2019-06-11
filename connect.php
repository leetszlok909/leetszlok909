<!DOCTYPE html>
<?php session_start(); ?>
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
						<a href="home.html">Home</a>
					</li>

					<li>
						<a href="contact.html">Contact</a>
					</li>
					<li>
						<a href="about.html">About</a>
					</li>
						<li style="float:right">
						<a class="active" href="ogin.html">Login</a>
					</li>
				</ul>
				
				
				<?php





include("connection.php");


$username=$_POST['username'];
$password=$_POST['password'];

$result =mysqli_query($conn,"select * from user where username='$username' and password='$password'")
 or die("Failed to query database".mysql_error());
 
 $row=mysqli_fetch_array($result);
 if($row['username']==$username && $row['password']==$password){
	 
	 
	 $_SESSION['username'] = $username;
   echo '<p class="login">' ."Hello " .$row['username']. ', welcome to QB bank system.'.  '</p>';

 }
 else{
	 echo '<p class="login">' ."Failed to login, please check your username password or sign up.". '</p>';
	 
	 echo '<p class="login">' ."Back to login page in 3 secconds". '</p>';
	 
	 header( "refresh:3;url=login.html" );
		

 }
 
 
 
 






?>
				
				<footer>
			<p style="color:white;">&copy; 2019</p>		
			<p style="color:white;">Posted by Lee Tsz Lok</p>
			<p style="color:white;">Contact information: <a href="mailto:leetszlok909@icloud.com" style="color:white">leetszlok909@icloud.com</a>.</p>
		</footer>

				



				</body>
			</html>
			