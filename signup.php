<!DOCTYPE html>
<?php session_start();?>
<html>
	<head>
		<meta charset="urf-8"/>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
		<title> Lee Tsz Lok Homepage</title>
		<style type="text/css">
.title{background-color:#e5feff;color:#cbaaff;font-size:30px;font-weight:bold;padding:10px 20px;width:fit-content;}
.menu{margin:20px;}
.hide{display:none;}
.context{font-size:20px;margin:10px 10px;overflow-y: auto;}
.footfont{color:white; margin-left:10px;font-size:20px;}
.image{width:100%;height:280px;}
.listlink{font-size:20px;}	
.active { background-color: #4CAF50; color: white;}
.signupcontext{margin-left:10px;font-size:20px;}
footer{width: 100%;height:180px;position:absolute;background: #333;overflow-y: auto;bottom:0;}
body{height:800px;}
ul { list-style-type: none; margin: 0; padding: 0;overflow:hidden;background-color:#333;}
li {float:left;border-right:1px solid #bbb;}
li a{display:inline-block;color:white;text-align:center;padding:20px 50px;text-decoration:none;}
li:last-child{border-right:none;}
li a:hover:not(.active) { background-color: #111;}


	@media screen and (max-width:800px){
	.title{width:fit-content;text-align:center;font-size:20px;}
	footer{ width: 100%;height:130px;position:relative;background: #333;overflow-y: auto;bottom:0;}
	 body{height:500px;}
	.image{	width:100%;	height:80px;}
	.listlink{font-size:15px;}	
	.footfont{color:white; margin-left:10px;font-size:10px;}
	.context{font-size:10px;margin:10px 10px;overflow-y: auto;}
	li a{display:inline-block;color:white;text-align:center;padding:20px 20px;text-decoration:none;}
	.signupcontext{margin-left:10px;font-size:15px;}
	}
}
		</style>
		<script type="text/javascript">

		</script>

	</head>
	<body style="margin:0px;background-color:#efefef;"">

		<div class="title" Onclick="window.location.href='index.html'"> Lee Tsz Lok </div>	

		<ul>
			<li>
				<a class="listlink" href="home.html">Home</a>
			</li>

			<li>
				<a class="listlink" href="contact.html">Contact</a>
			</li>
			<li>
				<a class="listlink" href="about.html">About</a>
			</li>
			<li style="float:right">
				<a class="active listlink" href="login.html">Login</a>
			</li>
		</ul>


		<?php


$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$curDate = date('Y-m-d H:i:s');

$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"bank");
$signup =mysqli_query($conn,"INSERT INTO user (username,password,email) values('$username','$password','$email')");
if($signup)
{
	echo  '<p class="signupcontext">'."You register successfully .<br> Welcome to join this system. <br> Enjoy." .'</p>'  ;
	echo  '<p class="signupcontext">' . "Thany you for your register." . '</p>';
	 echo '<p class="signupcontext">' ."Back to home page in 3 secconds". '</p>';	 
	 header( "refresh:3;url=home.html" );
}


else
{
	echo  '<p class="signupcontext">'."Sorry,your username or email has been used. Please use other ". '</p>' ;
	
	 echo '<p class="signupcontext">' ."Back to signup page in 3 secconds". '</p>';
	 
	 header( "refresh:3;url=signup.html" );
	
}
 




?>


	<footer>
						<p class="footfont">&copy; 2019</p>		
						<p class="footfont">Posted by Lee Tsz Lok</p>
						<p class="footfont">
							<span id="date_time"/>
						</p>	 
						<script type="text/javascript"> window.onload = date_time('date_time');</script>
						<p class="footfont">Contact information: <a href="mailto:leetszlok909@icloud.com" style="color:white">leetszlok909@icloud.com</a>.</p>
					</footer>
				


	</body>
</html>
