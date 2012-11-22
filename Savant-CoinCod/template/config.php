<?php 
// attempt a connection
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "password";
$dbname = "coincod";

//connect
$db = mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db("$dbname",$db);

$DOMAIN = $_SERVER["HTTP_HOST"];
$PATH = "/Savant";
$PREFIX = "http://$DOMAIN$PATH";
?>

<link href='http://fonts.googleapis.com/css?family=Exo:400,600' rel='stylesheet' type='text/css'>