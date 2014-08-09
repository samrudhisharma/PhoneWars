<?php
	if(isset($_POST['submit']))
	{
		require "C:\wamp\www\login\connect.php";
		$dtype=$_POST['dtype'];
		$os=$_POST['os'];
		$technology=$_POST['technology'];
		$touchscreen=$_POST['touchscreen'];
		$resolution=$_POST['resolution'];
		$features=$_POST['features'];
		$battery=$_POST['battery'];
		$Syschip=$_POST['Syschip'];
		$processor=$_POST['processor'];
		$sysmemory=$_POST['sysmemory'];
		$storage=$_POST['storage'];
		$camera=$_POST['camera'];
		$musicplayer=$_POST['musicplayer'];
		$network=$_POST['network'];
		$bluetooth=$_POST['bluetooth'];
		$usb=$_POST['usb'];
		$misc=$_POST['misc'];
		$query="INSERT INTO mobile (dtype,os,technology,resolution,touchscreen,features,battery,Syschip,processor,sysmemory,storage,camera,musicplayer,network,bluetooth,usb,misc) VALUES ('$dtype','$os','$technology','$resolution','$touchscreen','$features','$battery','$Syschip','$processor','$sysmemory','$storage','$camera','$musicplayer','$network','$bluetooth','$usb','$misc')";
		$result=mysql_query($query);
		if($result)
		{
			echo "Record Added.<br>";
		}
		else
			echo mysql_error();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>This is a admin page</title>
	<style type="text/css">
	input
	{
		display:block;
	}
	</style>
</head>
<body>
<form action="admin.php" method="POST">
	Device Type:<input type="textarea" name="dtype">
	OS:<input type="textarea" name="os">
	technology:<input type="textarea" name="technology">
	Resolution:<input type="textarea" name="resolution">
	touchscreen:<input type="textarea" name="touchscreen">
	features:<input type="textarea" name="features">
	battery<input type="textarea" name="battery">
	Syschip:<input type="textarea" name="Syschip">
	processor:<input type="textarea" name="processor">
	sysmemory:<input type="textarea" name="sysmemory">
	storage:<input type="textarea" name="storage">
	camera:<input type="textarea" name="camera">
	musicplayer:<input type="textarea" name="musicplayer">
	network:<input type="textarea" name="network">
	bluetooth:<input type="textarea" name="bluetooth">
	usb:<input type="textarea" name="usb">
	misc:<input type="textarea" name="misc">
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>