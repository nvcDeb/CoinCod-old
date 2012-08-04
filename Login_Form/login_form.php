<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" />
</head>

<body>
</br>
	<form action="../Login_Form/" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
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
					<a href="<?php echo $SITE;?>Forgot_Password/">Forgot Password?</a>
				</td>
				<td class="login_label_field">
					<a href="<?php echo $SITE;?>Registration/">Sign Up</a>
				</td>
			</tr>                   
		</tbody>
	</table>
	</form>					
</body>
</html>