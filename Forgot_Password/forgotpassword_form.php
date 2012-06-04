<?php
	  include "../server.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Forgot Password</title>
  	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  	<link rel="stylesheet" href="../validation/css/validation.css" type="text/css" />
  	<script type="text/javascript" src="../validation/livevalidation_standalone.compressed.js"></script>
    
</head>
<body>
<div id="wrapper">
	<?php
		include "../template/templateheader.php";
	?>
	<div id="content_container">
		<div class="auction_container">
		<form action="forgotpassword_func.php" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
		<h1><img src="../template/template_image/header/identify_your_account.png" border="0"></h1>
			<div class="forgot">
			<table>
				<tr>
				<td>Please enter your email so that we can send you an email for you to reset your password:</td>
				</tr>
				<tr>
				<td>Email address: 
				<input type="text" id="emails" name="emails" class="inputtext"/>
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
        <br/>
		</form>
		</div><!--end div auction_container-->
	</div><!--end div content_container-->
</div><!--end div wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
</body>
</html>