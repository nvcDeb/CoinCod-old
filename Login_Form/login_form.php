<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
</br>
	<form action="http://<?php echo $_SERVER['HTTP_HOST']; ?>/CoinCod/Login_Form/login_func.php" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
	<table cellspacing="0">
		<tbody>
			<tr>
				<td>
					<input type="text" class="inputtext" name="email" id="email" placeholder="Email" tabindex="1" />
				</td>
				<td>
					<input type="password" class="inputtext" name="password" id="password" placeholder="Password" tabindex="2">
				</td>
				<td>
					<button class="form_button" name="button" type="submit">LOGIN</button>
				</td>
			</tr>
			<tr>
				<td class="login_label_field">
					<a href="http://localhost/CoinCod/Forgot_Password/forgotpassword_form.php">Forgot Password?</a>
				</td>
				<td class="login_label_field">
					<a href="http://localhost/CoinCod/Registration/register_form.php">Sign Up</a>
				</td>
			</tr>                   
		</tbody>
	</table>
	</form>					
</body>
</html>