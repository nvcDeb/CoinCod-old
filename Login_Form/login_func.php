<?php

include '../server.php';

$email = stripslashes($_POST['email']);
$email = strip_tags($email);
$email = mysql_real_escape_string($email);
$password = ereg_replace("[^A-Za-z0-9]", "", $_POST['password']);
$hash_password = md5($password);

$userresult = mysql_query("SELECT * FROM user_account WHERE Email='$email' and Hash_Password='$hash_password' and Activation='0'" )or die(mysql_error());
$validuserresult = mysql_query("SELECT * FROM user_account WHERE Email='$email' and Hash_Password='$hash_password' and Activation='1'" )or die(mysql_error());
	
$user_login=mysql_num_rows($userresult);
$valid_userlogin=mysql_num_rows($validuserresult);

if(($user_login != 1) && ($valid_userlogin == 1))
{
	while($row = mysql_fetch_array($validuserresult))
	{ 
	   // Get member ID into a session variable
        $id = $row["User_Id"];   
        session_register('user_id'); 
        $_SESSION['user_id'] = $id;
        // Get member username into a session variable
	    $username = $row["Username"];   
        session_register('user_username'); 
        $_SESSION['user_username'] = $username;
		
        mysql_query("UPDATE user_account SET last_login=now() WHERE User_Id='$id'"); 
		if($id == 1)
		{
			header("location: ../User_Profile/user_profile.php?id=$id"); 
			exit();
		}
		else
		{
			header("location:../../CoinCod"); 
			exit();
		}
    } 
} ?>

	<html>
    <body>
	<div id="wrapper">
		<?php
			include "../template/templateheader.php";
		?>
      <div id="content_container">
    	<div class="auction_container">
		<h1><img src="../template/template_image/header/coincod_login.png" border="0"></h1>
<?php 
if(($user_login == 1) && ($valid_userlogin != 1))
{
	
	echo '<div class="f_login">Your account is not activated. </br>Please go email to activate it. </br>Thank you.</div>';

} 
if (($user_login != 1) && ($valid_userlogin != 1))
{

  	echo '<div class="f_login">Account cannot be found. </br>Please try again. </br>Thank you.</div>';

}

?>
	
	<form action="login_func.php" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
					<table width="650" cellpadding="0" cellspacing="10">
					<tr>
						<td width="25%">
							Email
						</td>
						<td width="75%"></br>
							<input type="text" name="email" value="" class="text" id="email"  placeholder="Email" size="33" maxlength="50" tabindex="10">
                            <script type="text/javascript">
								var email = new LiveValidation('email');
									email.add(Validate.Presence);
									email.add(Validate.Email, {failureMessage: 'Email Not Valid!'});		
							</script>
						</td>
					</tr>
					<tr>
						<td width="25%">
							Password
						</td>
						<td width="75%">
							<input type="password" name="password" value="" class="text" id="password" placeholder="Password" size="33" maxlength="50" tabindex="12">
                            <script type="text/javascript">
								var password = new LiveValidation('password');
									password.add(Validate.Presence);	
									password.add(Validate.Length, { minimum: 6 } );
							</script>
						</td>
					</tr>
                    <tr>
						<td>
							<input name="button" type="submit" class="form_button" value="Login">
						</td>
					</tr>
					</table> 
        </br>
        </form>
	</div><!--end div auction_container-->
  </div><!--end div content_container-->
</div><!--end div wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
	
	</body>
    </html>
