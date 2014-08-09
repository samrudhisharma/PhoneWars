<?php
require 'connect.inc.php';
$name = mysql_real_escape_string($_POST['name']);

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
		$row = mysql_fetch_array($age, MYSQL_NUM);
		//print_r($row);
		$json = json_encode(array('price' => "$row[10]",
								  'pname'=>"$row[2]",
								  'dimen'=>"$row[13]",
								  'brand'=>"$row[3]",
								  'os'=>"$row[4]",
								  'weight'=>"$row[5]",
								  'res' => "$row[6]",
								  'proc'=>"$row[8]",
								  'camera'=>"$row[9]",
								  'vidc'=>"$row[12]",
								  'intm'=>"$row[7]",
								  'imgsrc'=>"$row[1]"
								  ));
	    echo $json;
       exit;		
	}
}
?>