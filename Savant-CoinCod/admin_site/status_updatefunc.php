<?php
	session_start();
	include "../template/config.php";
	if(isset($_POST['status']))
	{
		$status=$_POST['status'];
		$updatestatus = "UPDATE status SET site_status='$status'";
		$querystatus = mysql_query($updatestatus) or die (mysql_error());
		header("location:../");
	}
?>