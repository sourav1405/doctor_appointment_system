<!DOCTYPE html>
<html>
<body style="background-image:url(a.jpg);background-size: cover;background-position: center;">
<link rel="stylesheet" href="main.css">
	<form action="alogin.php" method="post">
	<div class="header">
				<ul style="background-color: #1e70bf;height:50px;padding:10px 0px">
					<li style="float:left;border-right:none;"><strong> Admin Login</strong></li>
					<li><a href="cover.php">Home</a></li>
				</ul>
	</div>
	<div class="sucontainer">
		<label><b>Username:</b></label><br>
		<input type="text" placeholder="Enter Username" name="uname" required><br>
	
		<label><b>Password:</b></label><br>
		<input type="password" placeholder="Enter Password" name="pass" required><br><br>
		
		<div class="container" style="background-color:#6ec1af">
			<button type="submit" name="submit" style="float:right">Log In</button>
		</div>
<?php 
function SignIn() 
{ 
session_start();
 {  
	if($_POST['uname']=='sss' && $_POST['pass']=='123') 
	{ 
		$_SESSION['userName'] = 'admin'; 
		echo "Logging you in..";
		header( "Refresh:3; url=mainpage.php");
	} 
	else { 
		echo "Wrong Credentials!"; 
		} 
	}
	} 
	if(isset($_POST['submit'])) 
	{ 
		SignIn(); 
	} 
?>
</body>
</html>