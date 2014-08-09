<?php
	if(isset($_POST['change']))
	{
		$password=$_POST['password'];
		$username=$_GET['username'];
		echo $username." ".$password;
		$password=md5($password);
		$query="UPDATE login_main SET password='$password' WHERE username='$username'";
		include "connect.php";
		$result=mysql_query($query);
		if($result)
		{
			echo "Success";
			header("LOCATION: ./index.php");
		}
		else
			echo $result;

	}
?>