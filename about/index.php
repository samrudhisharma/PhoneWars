<?php
	session_start();
	include "connect.php";
	if(isset($_POST['feedback']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$pcont=$_POST['pcont'];
		$fback=$_POST['fback'];
		$sql="INSERT INTO feedback(fname,lname,email,phone,address,city,pcont,fback)VALUES('$fname','$lname','$email','$phone','$address','$city','$pcont','$fback')";
		$result=mysql_query($sql);
		if($result)
			echo "<p style='color:white;'>Feedback taken.</p>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/styleCompare.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jmin.js"></script>
	<link rel="stylesheet" type="text/css" href="../stylesheet.css">
	<link rel="stylesheet" href="style/jqui.css" />
		<style type="text/css">
		*
		{
			padding: 0px;
			margin:0px;
		}
	.cwrapper
{
	background-image: url(./images/bg.jpg);
	box-shadow: 2px 2px 4px #555 inset;
	font-family: "Myriad Pro";
	padding: 20px;
}
	</style>
<header>
				<a href="#" class="logo"><h1>PhoneWars</h1></a>
				<div id="navbar">
				<ul>
					<li>
						<a href="../start">Home</a>
					</li>
					<li><a href="../review">Specifications</a></li>
					<li><a href="#" class="active">Battle</a></li>
					<li><a href="#">About</a></li>
					<?php if(!isset($_SESSION['username'])):?>
						
						<li>
							<a href="../login">Login</a>
						</li>
					<?php 
						else:
							echo "<li>
									<ul class='lwrapper'>
										<li><a href='#' id='login'>Welcome, ".$_SESSION['username']."</a></li>";
						endif;
					?>
										<li><div id="popout" style="display:none;"><a href="../login/logout.php">Logout</a></div></li>
									</ul>
						</li>
				</ul>
			</div>
		</header>
		<div class="cwrapper">
			<h2>Contact Us</h2>
		<p>Send us questions, comments, or suggestions using this form.</p>
		<form name="contact" action="index.php" method="POST">
			<h4>First Name<h4>
			<label><input type="text" name="fname"></label>
			</h4>
			<h4>Last Name<h4>
			<label><input type="text" name="lname"></label>
			</h4>
			<h4>Email<h4>
			<label><input type="text" name="email"></label>
			</h4>
			<h4>Phone<h4>
			<label><input type="text" name="phone"></label>
			</h4>
			<h4>Address<h4>
			<label><input type="text" name="address"></label>
			</h4>
			<h4>City<h4>
			<label><input type="text" name="city"></label>
			</h4>
			<h4>Preferred Contact Method<h4>
			<label>
				<select name="pcont" style="width:70px">
					<option>Email</option>
					<option>Phone</option>
					<option>Mail</option>
				</select>
			</label>
			</h4>
			<h4>Questions or Comments<h4>
			<label><textarea name="fback" rows="8" cols="75" class="ss-q-long" id="entry_5" style="margin: 2px; width: 80%; height: 128px;"></textarea></label>
			</h4>
			<input type="submit" name="feedback" onclick="validateForm();" style="border:0;padding:5px;background-color:black;color:white;width:10%;">
		</form>
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
	         			<a href="../review">Specifications</a>
	         		</li>
	         		<li>
	         			<a href="#">Battle</a>
	         		</li>
	         		
	         		<li>
	         			<a href="">About</a>
	         		</li>
				</ul>
			<p id="copyright"> All rights Reserved. PhoneWars &copy;</p>
		</div>
		</footer>
</body>
</html>