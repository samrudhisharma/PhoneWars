<?php 
	session_start();
	include "connect.php";
	if(!isset($_SESSION['username'])||$_SESSION['username']!='rahul_nexus')
		header("LOCATION:../start/index.php?priv=0");
	if(isset($_POST['s_add']))
	{
		
		$tbl_name="mobile";
		$name=$_POST['name'];
		$img=$_POST['img'];
		$brand=$_POST['brand'];
		$os=$_POST['os'];
		$dimension=$_POST['dimension'];
		$weight=$_POST['weight'];
		$processor=$_POST['processor'];
		$resolution=$_POST['resolution'];
		$storage=$_POST['storage'];
		$b_life=$_POST['b_life'];
		$camera=$_POST['camera'];
		$vcamera=$_POST['vcamera'];
		$price=$_POST['price'];
		$sql="INSERT INTO $tbl_name(name,img,brand, os, dimension, weight, resolution, storage, processor, b_life, camera,vcamera,price)
		VALUES('$name','$img','$brand', '$os', '$dimension', '$weight', '$resolution','$storage', '$processor', '$b_life', '$camera','$vcamera','$price')";
		$result=mysql_query($sql);	
	}
	else if(isset($_POST['s_modify']))
	{
		$tbl_name="mobile";
		include 'connect.php';
		$modify=$_POST['modify'];
		$modify_to=$_POST['modify_to'];
		$new=$_POST['new'];
		$old=$_POST['old'];
		$sql="UPDATE $tbl_name SET $modify_to='$new' WHERE $modify='$old'";
		//UPDATE Persons SET Age=36
//WHERE FirstName='Peter' AND LastName='Griffin'"
		$result=mysql_query($sql);
	}
	else if(isset($_POST['d_modify']))
	{
		$tbl_name="mobile";
		include 'connect.php';
		$delete=$_POST['delete'];
		$del=$_POST['del'];
		$sql="DELETE FROM $tbl_name WHERE $delete='$del'";
		$result=mysql_query($sql);
		if($result)
			echo "Success";
		else
			echo mysql_error();	
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>This is the page reserved for ADMIN.</title>
	<link rel="stylesheet" type="text/css" href="../stylesheet.css">
	<style>
		*
		{
			margin:0px;
			padding:0px;
		}
		.cwrapper
		{
			background-color:white;
		}
		.cwrapper *
		{
			display: block;
			margin: 5px 10px;
		}
		.cwrapper input:nth-child(even)
		{
			display: inline;
		}
	</style>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$(".formadd").toggle(function(){
			$("#add").slideDown(200);
		},function(){
			$("#add").slideUp(200);
		});
		$(".formmodify").toggle(function(){
			$("#modify").slideDown(200);
		},function(){
			$("#modify").slideUp(200);
		});
		$(".formdelete").toggle(function(){
			$("#delete").slideDown(200);
		},function(){
			$("#delete").slideUp(200);
		});
	});
	</script>
</head>
<body>
	<header>
		<a href="#" class="logo"><h1>PhoneWars</h1></a>
			<div id="navbar">
				<ul>
				<li>
					<a href="../start">Home</a>
				</li>
				<li><a href="#" class="active">Reviews</a></li>
				<li><a href="../login/battle.php">Battle</a></li>
				<li><a href="">News</a></li>
					<li><a href="#">About</a></li>
				<?php if(!isset($_SESSION['username'])):?>
					<li><a href="../login">Login</a></li>
				<?php else:?>
					<li><a href="../login/logout.php">Logout</a></li>
				<?php endif;?>
			</ul>
		</div>
	</header>
	<div class="cwrapper">
	<a href="#" class="formadd">Add Mobiles</a>
	<form action="admin.php" method="POST" id="add" style="display:none;">
		<label>Name</label>
		<input type="text" name="name">
		<label>Image Link</label>
		<input type="text" name="img">
		<label>Brand</label>
		<input type="text" name="brand">
		<label>Operating System</label>
		<input type="text" name="os">
		<label>Dimensions</label>
		<input type="text" name="dimension">
		<label>Weight</label>
		<input type="text" name="weight">
		<label>Resolution</label>
		<input type="text" name="resolution">
		<label>Storage</label>
		<input type="text" name="storage">
		<label>Processor</label>
		<input type="text" name="processor">
		<label>Battery</label>
		<input type="text" name="b_life">
		<label>Camera</label>
		<input type="text" name="camera">
		<label>Video Camera</label>
		<input type="text" name="vcamera">
		<label>Price</label>
		<input type="text" name="price">
		<input type="submit" name="s_add">
	</form>
	<a href="#" class="formmodify">Modify Mobiles</a>
	<form action="admin.php" method="POST" id="modify" style="display:none">
		<label for="old">Enter the mobile parameter for which you want to change.</label>
		<select name="modify">
			<option value="name">Name</option>
			<option value="brand">Brand</option>
			<option value="os">Operating System</option>
			<option value="weight">Weight</option>
			<option value="resolution">resolution</option>
			<option value="storage">Storage</option>
			<option value="processor">Processor</option>
			<option value="camera">Camera</option>
			<option value="price">Price</option>
			<option value="b_life">Battery Life</option>
			<option value="vcamera">Video Camera</option>
			<option value="dimension">Dimension</option>
		</select>
		<label for="new">Enter the old value</label>
		<input type="text" name="old">	
		<label for="new">Enter the mobile parameter for which you want to change to.</label>
		<select name="modify_to">
			<option value="name">Name</option>
			<option value="brand">Brand</option>
			<option value="os">Operating System</option>
			<option value="weight">Weight</option>
			<option value="resolution">resolution</option>
			<option value="storage">Storage</option>
			<option value="processor">Processor</option>
			<option value="camera">Camera</option>
			<option value="price">Price</option>
			<option value="b_life">Battery Life</option>
			<option value="vcamera">Video Camera</option>
			<option value="dimension">Dimension</option>
		</select>
		<label for="new">Enter the new value</label>
		<input type="text" name="new">
		<input type="submit" name="s_modify">
	</form>
	<a href="#" class="formdelete">Delete Mobiles</a>
	<form action="admin.php" method="POST" id="delete" style="display:none">
		<label for="old">Enter the mobile which have the follwing parameters</label>
		<select name="delete">
			<option value="name">Name</option>
			<option value="brand">Brand</option>
			<option value="os">Operating System</option>
			<option value="weight">Weight</option>
			<option value="resolution">resolution</option>
			<option value="storage">Storage</option>
			<option value="processor">Processor</option>
			<option value="camera">Camera</option>
			<option value="price">Price</option>
			<option value="b_life">Battery Life</option>
			<option value="vcamera">Video Camera</option>
			<option value="dimension">Dimension</option>
		</select>
		<label for="del">Enter value</label>
		<input type="text" name="del">	
		<input type="submit" name="d_modify">
	</form>
	</div>
	<div id="feedback">
		<?php 
			$query="SELECT DISTINCT fname,fback from feedback";
			$result=mysql_query($query);
			echo "<p color='white'>All Feedbacks:</p>";
			while($row=mysql_fetch_row($result))
			{
				echo "<p style='color:white'>".$row[0]."</p><hr>"."<p style='color:white'>".$row[1]."</p><br><br>";
			}
		?>
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
			<p id="copyright"> All rights Reserved. PhoneWars &copy;</p>
		</div>
		</footer>
</body>
</html>