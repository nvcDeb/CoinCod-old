<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Site Status Update</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../server.php";
		include "../template/templateheader.php";
	?>
    <section id="content_container">
    	<section class="auction_container">
		<?php
        	if($userid == 1)
			{
				echo '<div id="admin_menu"><a href="../User_Profile/user_profile.php?id=' . $userid . '">' . $username . '</a>  &ndash;
        			<a href="../admin_site/product_form.php">Add Product </a>&ndash;
					<a href="../admin_site/user_list.php">User Listing</a>&ndash;
					<a href="../admin_site/sitestatus_updateform.php">Site Status</a></div></br>';
			}
		?>
		
		<form action="status_updatefunc.php" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
			<td>
				<select id="status" name="status" size="1">
					<option value="Well as usual running like charm.">Well as usual running like charm.</option>
					<option value="Website Maintenance! Temporary Down!">Website Maintenance! Temporary Down!</option>
				</select>
			</td>
			<input type="submit" name="button" class="form_button" value="Update" />
		</form>
	  </section><!--end div auction container-->
	</section><!--end div content_container-->
</div><!--end div wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
</body>
</html>