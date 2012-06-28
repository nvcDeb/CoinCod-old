<html>
<body>
<div id="wrapper">
	<?php
		include "../template/templateheader.php";
	?>
  <div id="content_container">
    <div class="auction_container">
	<?php  
	// connect to your MySQL database here 
	include "../server.php"; 
	session_start();
	// Set some values to go into the table fields for this person(record) 

	$emails = mysql_real_escape_string($_POST['emails']);
	$username = mysql_real_escape_string($_POST['username']);
	$passwords = mysql_real_escape_string($_POST['passwords']);
	$re_password = mysql_real_escape_string($_POST['re_password']);
	$firstname = mysql_real_escape_string($_POST['firstname']);
	$lastname = mysql_real_escape_string($_POST['lastname']);
	$dby = mysql_real_escape_string($_POST['date_birth_year']);
	$dbm = mysql_real_escape_string($_POST['date_birth_month']);
	$dbd = mysql_real_escape_string($_POST['date_birth_day']);
	$dob=sprintf("%04d-%02d-%02d", $dby, $dbm, $dbd);
	$gender = mysql_real_escape_string($_POST['gender']);
	$add1 = mysql_real_escape_string($_POST['add1']);
	$add2 = mysql_real_escape_string($_POST['add2']);
	$city = mysql_real_escape_string($_POST['city']);
	$state = mysql_real_escape_string($_POST['state']);
	$zip = mysql_real_escape_string($_POST['zip']);
	$country = "Malaysia";
	$mobile = mysql_real_escape_string($_POST['mobile']);
	$captcha = @$_POST['ct_captcha'];

	
	
	$username_check = mysql_query("SELECT * FROM user_account WHERE Username='$username' LIMIT 1");
	$username_checks = mysql_num_rows($username_check);
	$email_check = mysql_query("SELECT * FROM user_account WHERE Email='$emails' LIMIT 1");
	$email_checks = mysql_num_rows($email_check);
	$result = mysql_query($query);
	
	require_once('recaptchalib.php');
	$privatekey = "6LdlXNMSAAAAADBEPyiox0uXh-GsvdCpzfLw5YL9";
	$resp = recaptcha_check_answer ($privatekey,
                               $_SERVER["REMOTE_ADDR"],
                               $_POST["recaptcha_challenge_field"],
                               $_POST["recaptcha_response_field"]);
	
	if ($username_checks > 0)
	{
		echo " your username is taken.Please use another username";
	}
	else if ($email_checks > 0)
	{
		echo " your email already register.Please go forgot password.";
	}
	else if (!$resp->is_valid) 
	{
		echo "The reCAPTCHA wasn't entered correctly. Go back and try it again.";
    } 
	else
	{
		$getid=mysql_query("SELECT * FROM user_account WHERE User_Id = (select Max(User_Id) from user_account);");
		$getId = mysql_fetch_array($getid);
		$max_id = $getId["User_Id"];
		$id = $max_id + 1;
		
		$to = "$emails";
		$from = "wilson@nexvend.com";
		$subject = "Complete your registration";
		$message = '<html>
					Dear ' . $username . ',
					<br /><br />
					Congratulations for the successful registeration with CoinCod.  
					You must complete this last step in order to enjoy the wonderful auction experience that we will bring to you.
					<br /><br />
					To activate your account, please click on the confirmation link below (if link is not clickable, copy and paste the entire link into your
					browser) : &gt;&gt;
					<a href="http://auction12345.site50.net/Registration/register_activation.php?id=' .$id. '">
					ACTIVATE NOW</a>
					<br /><br />
					Your login information are as follows: 
					<br /><br />
					E-mail Address: ' . $emails . ' <br />
					Password: ' . $passwords . ' 
					<br /><br /> 
					Thanks You!  
					<br /><br /> 
					Best Regards,
					CoinCod Management Team
					</body>
					</html>';
			// end of message
			$headers = "From: $from\r\n";
			$headers .= "Content-type: text/html\r\n";
			$to = "$to";
			// Finally send the activation email to the member
			$sentactive = mail($to, $subject, $message, $headers);
			if($sentactive)
			{
				$hash_password = md5($passwords); //MD5 encryption.
				$sqlCommand = "INSERT INTO user_account 			(User_Id,Category,Username,Email,Password,Hash_Password,First_Name,Last_Name,Date_Birth,Gender,Address1,Address2,City,State,Zip,Country,Mobile,Date_Register,Activation,Token) VALUES('$id','0','$username','$emails','$passwords','$hash_password','$firstname','$lastname','$dob','$gender','$add1','$add2','$city','$state','$zip','$country','$mobile',now(),'0','10')";  		

				$query = mysql_query($sqlCommand) or die (mysql_error()); 
				header("location:register_end.php");
			}
			else
			{
				echo "Activation Email failed to be sent";
			}
		mysql_close(); 
		}
?>
	</div><!--end div auction_container-->
  </div><!--end div content_container-->
</div><!--end div wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
	
	</body>
    </html>