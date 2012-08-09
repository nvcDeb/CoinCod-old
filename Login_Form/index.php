<?php
session_start();
include '../server.php';

$email = stripslashes($_POST['email']);
$email = strip_tags($email);
$email = mysql_real_escape_string($email);
$password = ereg_replace("[^A-Za-z0-9]", "", $_POST['password']);
$hash_password = md5($password);

$userresult = mysql_query("SELECT * FROM user_account WHERE Email='$email' and hash_password='$hash_password' and Activation='0'" )or die(mysql_error());
$validuserresult = mysql_query("SELECT * FROM user_account WHERE Email='$email' and hash_password='$hash_password' and Activation='1'" )or die(mysql_error());
	
$user_login=mysql_num_rows($userresult);
$valid_userlogin=mysql_num_rows($validuserresult);

if(($user_login != 1) && ($valid_userlogin == 1))
{
	$_SESSION['start'] = time(); 
	$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;
	while($row = mysql_fetch_array($validuserresult))
	{ 
	   // Get member ID into a session variable
        $id = $row["user_id"];   
        session_register('user_id'); 
        $_SESSION['user_id'] = $id;
        // Get member username into a session variable
	    $username = $row["Username"];   
        session_register('user_username'); 
        $_SESSION['user_username'] = $username;
				
        mysql_query("UPDATE user_account SET last_login=now() WHERE user_id='$id'"); 
		if($id == 1)
		{
			header("location: ../User_Profile/?id=$id"); 
			exit();
		}
		else
		{
			header("location:./"); 
			exit();
		}
    } 
} ?>

<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" />
	<title>CoinCod Login</title>
	<link href="../template/style.css" rel="stylesheet" type="text/css" />
	
	<!--[if lte IE 9]>
	<link href="template/style_ie.css" rel="stylesheet" type="text/css"  />
	<![endif]-->
	
</head>

<body>
<div id="wrapper">
		<?php
	  		include "../template/templateheader.php";
		?>
	<div id="content_container">
		<h1><img src="../template/template_image/header/coincod_login.png"></h1>
    	<div class="auction_container">	
<?php 
if(($user_login == 1) && ($valid_userlogin != 1))
{
	
	echo 'Your account has not been activate. Please go email to activate it now and enjoy the forthcoming experience that CoinCod will bring to you. Thank you.';

} 
if (($user_login != 1) && ($valid_userlogin != 1))
{

  	echo 'Looks like your account cannot be found in our server. Please try again later. If this problem persists kindly send us an email at <a href="mailto:support@coincod.com">support@coincod.com.</a> Thank you.';

}

?>
	<div id="login">
	<form action="./" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
					<table>
					<tr>
						<td>
							Email
						</td>
						<td>
							<input type="text" name="email" value="" class="text" id="email"  placeholder="Email" size="33" maxlength="50" tabindex="10">
                            <script type="text/javascript">
								var email = new LiveValidation('email');
									email.add(Validate.Presence);
									email.add(Validate.Email, {failureMessage: 'Email Not Valid!'});		
							</script>
						</td>
					</tr>
					<tr>
						<td>
							Password
						</td>
						<td>
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
       
        </form>
	 </div> <!--end div login-->
	</div><!--end div auction_container-->
  </div><!--end div content_container-->
</div><!--end div wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
	
	</body>
    </html>
