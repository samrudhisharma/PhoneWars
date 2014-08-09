<?php
	session_start();
	include "connect.php";
	if(isset($_GET['flag'])):
		echo "Temporary password is sent to your email address.";
?>