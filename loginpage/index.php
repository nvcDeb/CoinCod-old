<?php
	ob_start();
?>
<!DOCTYPE html">
<html>
<head>
	<meta charset=utf-8" />
	<title>LoginPage</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../template/templateheader.php";
	?>
    <div id="content_container">
	<h1><img src="../template/template_image/header/login_form.png"></h1>
    	<div class="auction_container">
		        
        <form action="<?php echo $SITE;?>Login_Form/" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
					<table width="650" cellpadding="0" cellspacing="10">
					<tr>
						<td width="25%">
							Email
						</td>
						<td width="75%">
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
        </form>
	  </div><!--auction_container-->
	</div><!--content_container-->
	</div><!--wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
</body>
</html>