<?php
	require $this->template_path.'config.php';
?>
<?php echo $_SESSION['error']; $_SESSION['error']="";?>
<form action="<?php echo $PREFIX; ?>/login_form" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
	<table width="650" cellpadding="0" cellspacing="10">
		<tr>
			<td width="25%">
				Email
			</td>
			<td width="75%">
				<input type="text" name="email" value="" class="text" id="email"  placeholder="Email" size="33" maxlength="50" tabindex="10">
			</td>
		</tr>
		<tr>
			<td width="25%">
				Password
			</td>
			<td width="75%">
				<input type="password" name="password" value="" class="text" id="password" placeholder="Password" size="33" maxlength="50" tabindex="12">
			</td>
		</tr>
        <tr>
			<td>
				<input name="button" type="submit" class="form_button" value="Login">
			</td>
		</tr>
	</table> 
</form>