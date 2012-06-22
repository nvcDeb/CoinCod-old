<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Site Status Update</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../server.php";
		include "../template/templateheader.php";
	?>
    <div id="content_container">
    	<div class="auction_container">
		<form action="status_updatefunc.php" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
			<td>
				<select id="status" name="status" size="1">
					<option value="Well as usual running like charm.">Well as usual running like charm.</option>
					<option value="Website Maintenance! Temporary Down!">Website Maintenance! Temporary Down!</option>
				</select>
			</td>
			<input type="submit" name="button" class="form_button" value="Update" />
		</form>
	  </div><!--end div auction container-->
	</div><!--end div content_container-->
</div><!--end div wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
</body>
</html>