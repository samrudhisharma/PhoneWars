<?php 
	$mobile=$_GET['mobile'];
	include "connect.php";
	$query="SELECT * from mobile WHERE name='$mobile'";
	$result=mysql_query($query);
	$name=$result['name'];
	$brand=$$rows['brand'];
	while($rows=mysql_fetch_row($result))
	{
		echo $rows['brand'].'<br>'.$rows['os'].'<br>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>This is the review page</title>
</head>
<body>
	<h3>
	
	</h3>
</body>
</html>