<?php
	session_start();
	include "../server.php";
	if(isset($_POST['status']))
	{
		$status=$_POST['status'];
		$updatestatus = "UPDATE status SET Site_Status='$status'";
		$querystatus = mysql_query($updatestatus) or die (mysql_error());
		header("location:../../CoinCod");
	}
?>
