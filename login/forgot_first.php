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

	<?php
		if(!isset($_POST['forgot'])):
			echo "<p>Please enter the username and email id.</p>";
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
	<p>Please enter the new password.</p>
	<label for="password">Password</label>
	<input type="password" name="password" placeholder="Enter Password">
	<label for="cpassword">Confirm Password</label>
	<input type="password" name="cpassword" placeholder="Confirm password">
	<button name="change"><h3>Submit</h3></button>
	</form>
<?php
		endif;
	
?>
