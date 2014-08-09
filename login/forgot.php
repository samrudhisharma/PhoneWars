<?php
	if(isset($_POST['forgot']))
	{	
		$user=$_POST['username'];
		$email=$_POST['email'];
		include "connect.php";
		$query="SELECT * FROM login_main WHERE email='$email' AND username='$user'";
		$result=mysql_query($query);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>This is the forgot page</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="../stylesheet.css">
	<script type="text/javascript" src="./scripts/validate.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="./scripts/script.js"></script>
	<style>
		button
		{
			margin:20px auto;
		}
	</style>
</head>
<body>
		<header>
				<a href="../start" class="logo"><h1>PhoneWars</h1></a>
				<div id="navbar">
				<ul>
					<li>
						<a href="../start">Home</a>
					</li>
					<li><a href="../review" >Reviews</a></li>
					<li><a href="battle.php">Battle</a></li>
					<li><a href="">News</a></li>
					<li><a href="http://www.samrudhisharma.in/phones1.html#">About</a></li>
					<li><a href="#" class="active">Login</a></li>
				</ul>
		</header>
			<div class="cwrapper">
			<?php 
			if(mysql_num_rows($result)!=1):
			echo "<p style='color:red'>Invalid Credentials.</p>";
			?>
				
				<form name="forgot" action="forgot.php" method="POST">
					<label for="username">Username</label>
					<input type="text" name="username" placeholder="Enter Username">
					<label for="email">Email Id</label>
					<input type="text" name="email" placeholder="Enter Email">
					<button name="forgot"><h3>Submit</h3></button>
				</form>
			<?php
				else:
			?>
			<form name="change" action=<?php echo "change.php?username=".$GLOBALS['user'];?> method="POST">
				<label for="password">Password</label>
				<input type="password" name="password" placeholder="Enter Password">
				<label for="cpassword">Confirm Password</label>
				<input type="password" name="cpassword" placeholder="Confirm password">
				<button name="change"><h3>Submit</h3></button>
			</form>
			</div>
		<?php 
			endif;
		?>
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
         			<a href="">Home</a>
         		</li>
	         		<li>
         			<a href="">Reviews</a>
         		</li>
         		<li>
         			<a href="">Battle</a>
         		</li>
         		<li>
         			<a href="">News</a>
         		</li>
         		<li>
         			<a href="">Contact</a>
				</li>
         		<li>
         			<a href="">About</a>
         		</li>
			</ul>
		<p id="copyright"> All rights Reserved.PhoneWars &copy;</p>
	</footer>
</body>
</html>