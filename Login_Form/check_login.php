<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
					$_SESSION['expire'] = $_SESSION['start_reset'] + (1 * 60) ;
					include "../server.php";
					$userid = $_SESSION['user_id'];
					$username = $_SESSION['user_username'];
							
					$user=mysql_query("SELECT * FROM user_account WHERE User_Id='$userid'");
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
						<a href="User_Profile/user_profile.php?id=' . $userid . '">' . $username . '
						</a>
					</div>
					<div class="logout">
						<a href="../Logout"><div class="logout_button">Log Out</div>
						</a>
					</div><div class="token_left">
						</br><img src="../template/template_image/header/token_left.png" border="0" width="30%"> '.$token.'
					</div>
					</div>';
				}
			} 
			else 
			{
				include "login_form.php";
			}
		?>
</body>
</html>
