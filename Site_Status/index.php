<?php
	session_start();
	include "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Site Status</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../template/templateheader.php";
	?>
   <section id="content_container">
		<h5>Site Status</h5>
		<section class="auction_container">
		
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
        <h1><img src="<?php echo $PREFIX; ?>/template/template_image/bottom/site_status.png" alt="communicating"></h1>
		</section>
	</section>
</div><!--wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
</body>
</html>