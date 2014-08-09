<?php
require 'connect.php';
$name = "Apple Iphone 5";//mysql_real_escape_string($_POST['name']);
if($name==NULL)
{
	echo "Please enter a name";
}
else
{
	$age = mysql_query("SELECT * FROM mobile WHERE name='$name'");
	$age_num_rows = mysql_num_rows($age);
	if($age_num_rows==0)
	{
		echo "Name does not exist";
	}
	else
	{
		$row = mysql_fetch_array($age,MYSQL_ASSOC);
		$json = json_encode(array(
								  'img'  => "$row[1]"
								  'name' => "$row[2]",
								  'brand'=>"$row[3]",
								  'os'=>"$row[4]",
								  'weight'=>"$row[5]",
								  'resolution'=>"$row[6]",
								  'storage'=>"$row[7]",
								  'processor'=>"$row[8]",
								  'camera'=>"$row[9]",
								  'price'=>"$row[10]",
								  'b_life'=>"$row[11]",
								  'vcamera'=>"$row[12]",
								  'dimension'=>"$row[13]",
								  ));

		echo print_r($row);
       	exit;
	}
}
?>
