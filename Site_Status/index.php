<?php
	session_start();
	include "../server.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Site Status</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../template/templateheader.php";
	?>
   <div id="content_container">
		<h1><img src="../template/template_image/header/site_status.png"></h1>
		<div class="auction_container">
		
			<div class="status_box">
				<div class="status_left"><div class="left">How is CoinCod doing today?
				<?php echo date("d-F-Y"); ?>
				</div>
				</div>
				<div class="status_right">
				<div class="right">
				<?php
					$getstatus=mysql_query("SELECT * FROM status");
					$get=mysql_fetch_array($getstatus);
					$status=$get["Site_Status"];
					echo $status;
				?>
				</div>
				</div>
			</div>
        <h1><img src="../template/template_image/bottom/site_status.png"></h1>
		</div>
	</div>
</div><!--wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
</body>
</html>