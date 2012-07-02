<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div id="wrapper">
	<?php
	session_start();
		include "../template/templateheader.php";
	?>
   <div id="content_container">
		<div class="auction_container">
	<?php  
	// connect to your MySQL database here 
	include "../server.php"; 
	session_start();
	// Set some values to go into the table fields for this person(record) 
	$userid = mysql_real_escape_string($_POST['userid']);
	$newusername = mysql_real_escape_string($_POST['username']);
	$newemails = mysql_real_escape_string($_POST['emails']);
	$newpassword = mysql_real_escape_string($_POST['passwords']);
	$newfirstname = mysql_real_escape_string($_POST['firstname']);
	$newlastname = mysql_real_escape_string($_POST['lastname']);
	$newgender = mysql_real_escape_string($_POST['gender']);
	$newadd1 = mysql_real_escape_string($_POST['add1']);
	$newadd2 = mysql_real_escape_string($_POST['add2']);
	$newcity = mysql_real_escape_string($_POST['city']);
	$newzip = mysql_real_escape_string($_POST['zip']);
	$newstate = mysql_real_escape_string($_POST['state']);
	$newmobile = mysql_real_escape_string($_POST['mobile']);
	
	//$newpasswords = md5($newpassword); //MD5 encryption.	
	//$sqlCommand = "UPDATE user_account SET Username='$newusername', Password='$newpassword', Hash_password='$newpasswords', First_Name='$newfirstname', Last_Name='$newlastname', Address1='$newadd1', Address2='$newadd2', City='$newcity', Zip='$newzip', Mobile='$newmobile' WHERE user_id='$userid'";
		//$query = mysql_query($sqlCommand) or die (mysql_error()); 
		
		$to = "$newemails";
		$from = "hychan_89@hotmail.com";
		$subject = "Complete your registration";
		$message = '<html>
					Dear ' . $newusername . ',
					<br /><br />
					Your personal information was updated. We hope you have an enjoyable auction experience with us.
					<br /><br /> 
					Thank You!  
					<br /><br /> 
					Best Regards,<br/>
					CoinCod Management Team
					</body>
					</html>';
			// end of message
			$headers = "From: $from\r\n";
			$headers .= "Content-type: text/html\r\n";
			$to = "$to";
			// Finally send the activation email to the member
			$sentupdate = mail($to, $subject, $message, $headers);
			if($sentupdate)
			{
			$newpasswords = md5($newpassword); //MD5 encryption.	
			$sqlCommand = "UPDATE user_account SET Username='$newusername', Password='$newpassword', hash_password='$newpasswords', first_name='$newfirstname', last_name='$newlastname', Gender='$newgender', Address1='$newadd1', Address2='$newadd2', City='$newcity', Zip='$newzip', State='$newstate', Mobile='$newmobile' WHERE user_id='$userid'";
			$query = mysql_query($sqlCommand) or die (mysql_error()); 		
			header("Location: ../User_Profile/user_profile.php");
				
			}
			else
			{
				echo "Email for updated personal information failed to be sent";
			}
		mysql_close(); 
?>
		</div><!--end div auction_container-->
	</div><!--end div content_container-->
</div><!--end div wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
	
	</body>
    </html>