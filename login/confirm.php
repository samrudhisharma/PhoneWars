<?php
	session_start();
	include "connect.php";
	if(!isset($_GET['passkey']))
	{
		echo "Confirmation link has been sent.";
	}
	else
	{
		$tbl_name1="temp_login";
		$sql1="SELECT * FROM $tbl_name1 WHERE confirm_code ='$passkey'";
		$result1=mysql_query($sql1);
		if($result1)
		{	
			$count=mysql_num_rows($result1);
			if($count==1)
			{
				$rows=mysql_fetch_array($result1);
				$name=$rows['name'];
				$email=$rows['email'];
				$password=$rows['password']; 
				$username=$rows['username'];
				$tbl_name2="login_main";
				$sql2="INSERT INTO $tbl_name2(name, username, password, email)VALUES('$name', '$username', '$password','$email')";
				$result2=mysql_query($sql2);
				echo "<p>Your account has been activated</p>";
			}
			else 
			{
				echo "Wrong Confirmation code";
			}
		}
		if($result2)
		{
		$sql3="DELETE FROM $tbl_name1 WHERE confirm_code = '$passkey'";
		$result3=mysql_query($sql3);
		}	
	}
?>