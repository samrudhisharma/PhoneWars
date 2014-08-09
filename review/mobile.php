<?php
	include "connect.php";
	if(isset($_GET['name']))
	{
		$mob_name=$_GET['name'];
		$mob_name=str_replace("+", " ",$mob_name);
		$query="SELECT * from mobile where name='$mob_name'";
		$result=mysql_query($query);
		if(!$result)
			echo mysql_error();
		else
			$row=mysql_fetch_assoc($result);
	}
?>
<h1 class="result"><?php echo $row['name'];?></h1>
<div class="result">
	<h3>Specifications</h3>
	<table border="1">
	<tr>
		<td>Brand</td>
		<td><?php echo $row['brand'];?></td>
	</tr>
	<tr>
		<td>Operating System</td>
	
		<td><?php echo $row['os'];?></td>
	</tr>
	<tr>
		<td>Dimensions</td>
		<td><?php echo $row['dimension'];?></td>
	</tr>
	<tr>
		<td>Weight</td>
		<td><?php echo $row['weight'];?></td>
	</tr>
	<tr>
		<td>Resolution</td>

		<td><?php echo $row['resolution'];?></td>
	</tr>
	</table>
	<h3>Hardware</h3>
	<table border="1">
	<tr>
		<td>Storage</td>
		<td><?php echo $row['storage'];?></td>
	</tr>
	<tr>
		<td>Processor</td>
		<td><?php echo $row['processor'];?></td>
	</tr>
	<tr>
		<td>Battery</td>
		<td><?php echo $row['b_life'];?></td>
	</tr>
	</table>
	<h3>Imaging</h3>
	<table border="1">
	<tr>
		<td>Camera</td>
		<td><?php echo $row['camera'];?></td>
	</tr>
	<tr>
		<td>Video Camera</td>
		<td><?php echo $row['vcamera'];?></td>
	</tr>
	</table>
	<h3>Price</h3>
	<p style="color:green; font-size:20px;"><span class="WebRupee">Rs.</span><?php echo $row['price'];?></p>
</div>
<div id="image" class="sticky">
<h3 style="border-bottom:1px solid blue;margin-bottom:20px;">IMAGES</h3>
<img src=<?php echo '"'.$row['img'].'"'; ?> height="200px">
</div>

