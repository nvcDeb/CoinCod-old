<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<body>
<title>Forgot Password</title>
<div id="wrapper">
	<?php
		include "../template/templateheader.php";
	?>
    <div id="content_container">
		<div class="auction_container">
		<?php
			include "../server.php";
			$emails = stripslashes($_POST['emails']);

			$password_check = mysql_query("SELECT * FROM user_account WHERE Email='$emails'");
			$passwords_check = mysql_num_rows($password_check);
			$row = mysql_fetch_array($password_check);
			$recover_password = $row["Password"];

			if($password_check == 1)
			{
				$to = "$emails";
				$from = "hychan_89@hotmail.com";
				$subject = "Forgot Password";
				$messages = '<html>
							<body>
							This is your basic account information registered with CoinCod. 
							<br/><br/>
							E-mail Address: ' . $emails . ' <br />
							Password: ' . $recover_password . ' 
							<br/>
							Enjoy your awesome first auction experience with Coincod.
							<br /><br /> 
							Thank You! 
							<br /><br />
							NOTE:If you did not request for this email. Kindly ignore it.
							<br /><br />
							Best Regards,
							CoinCod Management Team
							</body>
							</html>';
				// end of message
				$headers = "From: $from\r\n";
				$headers .= "Content-type: text/html\r\n";
				$to = "$to";

        		$sentmail = mail($to,$subject,$messages,$headers);

    			if($sentmail)
    			{
					echo "Successfully sent";
    			}
    			else
    			{
					echo "Sorry. The password failed to be sent. Please retry.";
    			}
			}
			else
			{
				echo "Sorry, this email cannot be found";
    			header("Location: forgotpassword_func.php?send=Email address not found");
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

