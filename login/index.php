<?php
	session_start();
	include "connect.php";
	if(isset($_SESSION['username']))
	{
		header("LOCATION:../start");
	}
	if(isset($_POST['login']))
	{
		$tbl_name="login_main";
		$username=$_POST['username'];
		$password=$_POST['password'];
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		$password=md5($password);
		$sql="SELECT * FROM $tbl_name WHERE BINARY username='$username' and password='$password'";
		$result=mysql_query($sql);
		$count=mysql_num_rows($result);
		if($count==1)
		{
			$_SESSION['username']=$username;
			header("LOCATION:../start");	
		}
		else
		{
			header("LOCATION:index.php?success=false");
		}
	}
	if(isset($_POST['signup']))
	{
		$name=$_POST['name'];
		$handle=$_POST['handle'];
		$pass=$_POST['crpassword'];
		$pass=stripslashes($pass);
		$pass=mysql_real_escape_string($pass);
		$pass=md5($pass);
		$email=$_POST['email'];
		$tbl_name="login_main";
		$sql="SELECT * FROM $tbl_name WHERE BINARY username='$handle'";
		$result=mysql_query($sql);
		$count=mysql_num_rows($result);
		if($count!=0)
		{
			header("LOCATION:index.php?signup=false");
		}
		else
		{
			$tbl_name="temp_login";
			$confirm_code=md5(uniqid(rand()));
			$sql="INSERT INTO $tbl_name(confirm_code, name, email, username, password)VALUES('$confirm_code', '$name', '$email', '$handle','$pass')";
			$result=mysql_query($sql);
			$to=$email;
			$subject="Your confirmation link here";
			$header="From:PhoneWars";
			$message="Your Confirmation link \r\n";
			$message.="Your Password is: \r\n";
			$message.=$pass;
			$message.="Click on this link to activate your account \r\n";
			$message.="http://www.phonewars.x10host.com/login/confirm.php?passkey=";
			$message.=$confirm_code;
			$sentmail = mail($to,$subject,$message,$header);
			header("LOCATION:confirm.php");
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>This is the login page</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="../stylesheet.css">
	<script type="text/javascript" src="./scripts/validate.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="./scripts/script.js"></script>
</head>
<body>
		<header>
				<a href="../start" class="logo"><h1>PhoneWars</h1></a>
				<div id="navbar">
				<ul>
					<li>
						<a href="../start">Home</a>
					</li>
					<li><a href="../review">Specification</a></li>
					<li><a href="../battle">Battle</a></li>
					
					<li><a href="http://www.samrudhisharma.in/phones1.html#">About</a></li>
					<li><a href="#" class="active">Login</a></li>
				</ul>
		</header>
		<div class="cwrapper">
			<div id="search">
				<form>
					<input type="text" name="search" placeholder="Search phone...">
					<input type="submit" name="submit" value="Search">
				</form>
			</div>
			<?php
				if(isset($_GET['forgot'])&&$_GET['forgot']==1):
			?>
				<script type="text/javascript">
					call()	;
				</script>
			<?php		
				endif;
			?>
			<div id="fwrapper" class="form"></div>
			<div class="form" id="f1">
				<h2>LOGIN</h2>
				<img src="./images/lock-icon.svg" height="45" width="45">
				<?php
					if(isset($_GET['status'])&&$_GET['status']=='1')
					{
						echo "<p class='warning'>Please login to compare phones.</p>";
					}
					if(isset($_GET['success'])&&$_GET['success']=='false')
					{
						echo "<p class='warning'>Username or Password Incorrect.</p>";
					}
				?>
				<form name="login" action="index.php" method="POST" onsubmit="return validateLogin()">
					<label for="username">Username</label>			
					<input type="text" name="username" placeholder="Enter Username">
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="Enter Password">
					<button name="login"><h3>LOGIN</h3></button>
					<label id="forgot">Forgot Password?</label>
				</form>
			</div>
			<div class="form" id="f2">
				<h2>REGISTER</h2>
				<img src="./images/user-icon.svg" height="45" width="45">
				<?php
				if(isset($_GET['signup'])&&$_GET['signup']=='false')
					{
						echo "<p class='warning'>Handle is already in use.</p>";
					}
				?>
				<form name="myForm" action="index.php" method="POST" onsubmit="return validateSignUp()">
					<label for="name">Name</label>
					<input type="text" name="name" placeholder="Enter name">
					<label for="handle">Handle</label>
					<input type="text" name="handle" placeholder="Enter handle">
					<label for="email">Email</label>
					<input type="text" name="email" placeholder="Enter email">
					<label for="crpassword">Create Password</label>
					<input type="password" name="crpassword" placeholder="Enter password">
					<label for="copassword">Confirm Password</label>
					<input type="password" name="copassword" placeholder="Please confirm password">
					<button name="signup"><h3>REGISTER!</h3></button>
				</form>
			</div>
		</div>
				<footer>
		        <a href="#" class="logo"><h2>PhoneWars</h2></a>
		        <div class="social">
		        <ul>
			        <li>
			    		<a href=""><img src="../images/PNG/facebook.png" /></a>
			    	</li>
			    	<li>
			    		<a href=""><img src="../images/PNG/youtube.png" /></a>
			    	</li>
			    	<li>
	                	<a href=""><img src="../images/PNG/twitter.png"></a>
	                </li>
	            </ul>
	            </div>
	         	<ul class="sitemap">
	         		<li>
	         			Site Map
	         		</li>
	         		<li>
	         			<a href="../start">Home</a>
	         		</li>

	         		<li>
	         			<a href="../review">Reviews</a>
	         		</li>
	         		<li>
	         			<a href="../battle">Battle</a>
	         		</li>
	         		<li>
	         			<a href="#">About</a>
	         		</li>
				</ul>
			<p id="copyright"> All rights Reserved.PhoneWars&copy;</p>
		</footer>
</body>
</html>