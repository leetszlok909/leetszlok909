<!DOCTYPE html>
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
						<a  href="http://localhost/contact.html">Contact</a>
					</li>
					<li>
						<a href="http://localhost/about.html">About</a>
					</li>
						<li class="active" style="float:right">
						<a href="http://localhost/login.html">Login</a>
					</li>
				</ul>

				
					<h1 style="padding:0px;margin:10px;">Welcome  <?php echo $_POST["username"]; ?>
							<br> 
						Your password is: <?php echo $_POST["password"]; ?>
					</h1>

				
				
				

				</body>
			</html>
			