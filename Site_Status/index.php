<?php
	session_start();
	include "../server.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8" />
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
					$status=$get["site_status"];
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