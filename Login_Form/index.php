<?php
session_start();
include '../config.php';

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
			header("location: $PREFIX/User_Profile/?id=$id"); 
			exit();
		}
		else
		{
			header("location:$PREFIX"); 
			exit();
		}
    } 
} ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>CoinCod Login</title>
	<link href="<?php echo $PREFIX; ?>/template/style.css" rel="stylesheet" type="text/css" />
	
	<!--[if lte IE 9]>
	<link href="<?php echo $PREFIX; ?>/template/style_ie.css" rel="stylesheet" type="text/css"  />
	<![endif]-->
	
</head>

<body>
<div id="wrapper">
		<?php
	  		include "../template/templateheader.php";
		?>
	<div id="content_container">
		<h5>CoinCod Login</h5>
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
	</div><!--end div auction_container-->
  </div><!--end div content_container-->
</div><!--end div wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
	
	</body>
    </html>
