<?php
	ob_start();
?>
<!DOCTYPE html">
<html>
<head>
	<title>Forgot Password</title>
  	<meta charset=utf-8" />
  	<link rel="stylesheet" href="../validation/css/validation.css" type="text/css" />
  	<script type="text/javascript" src="../validation/livevalidation_standalone.compressed.js"></script>
    
</head>
<body>
<div id="wrapper">
	<?php
		include "../template/templateheader.php";
	?>
	<div id="content_container">
	<h1><img src="../template/template_image/header/identify_your_account.png"></h1>
		<div class="auction_container">
		<form action="forgotpassword_func.php" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
	
			<div class="forgot">
			<table>
				<tr>
				<td>Please enter your email so that we can send you an email for you to reset your password:</td>
				</tr>
				<tr>
				<td><div class="value">Email</div>
				<input type="text" id="emails" name="emails" class="text"/>
					<script type="text/javascript">
						var emails = new LiveValidation('emails');
						emails.add(Validate.Presence)
						emails.add(Validate.Email )
					</script>
				</td>
				</tr>
				<tr>
				<td><input type="submit" name="button" class="form_button" value="RESET PASSWORD" /></td> 
				</tr>
			</table>
			</div> <!--end div forgot-->
		</form>
		</div><!--end div auction_container-->
	</div><!--end div content_container-->
</div><!--end div wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
</body>
</html>