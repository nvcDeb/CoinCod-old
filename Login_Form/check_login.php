<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>	
<meta charset=utf-8" />
</head>

<body>
		<?php
			if (isset($_SESSION['user_id'])) 
			{
				 $now = time(); 
				if($now > $_SESSION['expire'])
				{
					session_destroy();
					echo "<script language='javascript'>";
					echo "window.location='index.php';";
					echo "alert('Timeout!!!Please login to continue browsing the site');";
					echo "</script>";
				}
				else
				{ 
					$_SESSION['start_reset'] = time();
					$_SESSION['expire'] = $_SESSION['start_reset'] + (30 * 60) ;
					include "../server.php";
					$userid = $_SESSION['user_id'];
					$username = $_SESSION['user_username'];
							
					$user=mysql_query("SELECT * FROM user_account WHERE user_id='$userid'");
					$get=mysql_fetch_array($user);
					$token=$get["Token"];
					$gravatar_image=$get["Email"];
					$default = "http://auction12345.site50.net/template/template_image/favicon.ico";
					$size = 40;

					$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $gravatar_image ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
												
					echo '
					<div id="after_log_in">
					<div class="user_name">
					<img src="'.$grav_url.'" alt="" />
						<a href="../User_Profile/?id=' . $userid . '">' . $username . '
						</a>
					</div>
					
					<div id="logout">
						<a href="../Logout">Log Out</a>
						
					</div>
					<div class="token_left">
						<img src="../template/template_image/header/token_left.png" border="0" width="30%"> '.$token.'
					</div>
					</div>';
				}
			} 
			else 
			{
				include("$_SERVER[DOCUMENT_ROOT]/CoinCod/Login_Form/login_form.php");
			}
		?>
</body>
</html>
