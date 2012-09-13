<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
</head>
<body>
<div id="wrapper">
	<?php
		include "../template/templateheader.php";
	?>
   <div id="content_container">
		<div class="auction_container">
	<?php  
	// connect to your MySQL database here 
	include "../config.php"; 
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
			header("Location: $PREFIX/User_Profile/?id=$userid");
				
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