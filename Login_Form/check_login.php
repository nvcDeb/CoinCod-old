<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
		<?php
			if (isset($_SESSION['user_id'])) 
			{
				include "../server.php";
    			$userid = $_SESSION['user_id'];
    			$username = $_SESSION['user_username'];
							
				$user=mysql_query("SELECT * FROM user_account WHERE User_Id='$userid'");
				$get=mysql_fetch_array($user);
				$token=$get["Token"];
				
				echo '
				<div id="after_log_in">
					<div class="user_name"><img src="../template/template_image/header/welcome_back.png" border="0" width="45%">
						<a href="../User_Profile/user_profile.php?id=' . $userid . '">' . $username . '
						</a>
					</div>
					<div class="logout">
						<a href="../CoinCod/Logout"><div class="logout_button">Log Out</div>
						</a>
					</div><div class="token_left">
						</br><img src="../template/template_image/header/token_left.png" border="0" width="30%"> '.$token.'
					</div>
				</div>';
			} 
			else 
			{
				include "login_form.php";
			}
		?>
</body>
</html>
