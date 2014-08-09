<!DOCTYPE html>
<html>
<head>
	<title>This is the home page</title>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
	$(function(){
		$("a.logout").click(function(){
			$("div.logout").load("logout.php");
		});
	});
	</script>
</head>
<body>
<?php
	session_start();
	if(!isset($_SESSION['username']))
		echo "<a href='index.php?status=0'>Login</a>";
	if(isset($_SESSION['username']))
	{
		echo "<p>Welcome, ".$_SESSION['username']."</p>";
		$str='battle.php';
		echo "<a href='logout.php' class='logout'>Logout</a>";
		echo "<div style='display:none' class='logout'></div>";
	}
	else
	{
		$str='index.php?status=1';
	}
	if(isset($_GET['logout'])&&$_GET['logout']==='success')
	{
		echo "You are successfully logged out.";
	}
?>
<a href=<?php echo $str;?>>Battle</a>

</body>
</html>