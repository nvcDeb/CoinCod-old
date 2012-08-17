<?php 
$hostname = 'localhost';
$dbname = 'coincod';
$username = 'root';
$password = 'password';


mysql_connect($hostname,$username,$password) or die ('Connection lost! Server is down!');
mysql_select_db($dbname) or die ('Database name is not available!');

$DOMAIN = "http://coincod.com";
$PATH = "";
$PREFIX = $DOMAIN.$PATH;
?>
