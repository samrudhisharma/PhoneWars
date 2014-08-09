<?php
$mysql_host = 'localhost';
$mysql_user='root';
$mysql_password = 'maths@123';
$mysql_database = 'website';

if(!mysql_connect($mysql_host,$mysql_user,$mysql_password)|| !mysql_select_db($mysql_database))
{
die(mysql_error());
}

?>