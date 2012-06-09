<?php 
$hostname = 'localhost';
$dbname = 'coincod';
$username = 'root';
$password = '1234';


mysql_connect($hostname,$username,$password) or die ('Connection lost! Server is down!');
mysql_select_db($dbname) or die ('Database name is not available!');

?>
