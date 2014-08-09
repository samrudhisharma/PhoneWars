<?php 
session_start();
if(!isset($_SESSION['username']))
	header("LOCATION:index.php?status=1")
?>
<!DOCTYPE html>
<html>
<head>
	<title>This is the battle page</title>
</head>
<body>
<p>Welcome to the battle page of PhoneWars</p>
</body>
</html>