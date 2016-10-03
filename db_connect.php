<?php

$servername = "localhost";
$username = "root";
$password = "123456";
$dbase = "testproduct";

$conn = mysql_connect($servername, $username, $password);
if (!$conn) {
	die("Connection failed: " . mysql_error());
}
mysql_select_db($dbase, $conn);

mysql_query("SET NAMES 'utf8'"); 
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("SET SESSION collation_connection = 'utf8_general_ci'");