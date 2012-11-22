<?php
	include_once 'functions.php';
	require $this->template_path.'config.php';
	
	if(isset($_POST["btnGet"])){
		$result = sendpassword($_POST['emails']);	
?>
	<div style="color:red;">
		<?php echo $result;?>
	</div>
<?php } ?>
<form action="" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
	<section class="forgot">
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
				<td><input type="submit" name="btnGet" class="form_button" value="RESET PASSWORD" /></td> 
			</tr>
		</table>
	</section> <!--end div forgot-->
</form>