<?php
	ob_start();
	include "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" HTTP-EQUIV="Refresh" CONTENT="1;URL=<?php echo $PREFIX; ?>"/>
	<title>Logout</title>
</head>

<body>
	<div id="wrapper">
	<?php
		session_start();
		session_destroy();
		unset( $_SESSION );
		include "../template/templateheader.php";
	?>
		<section id="content_container">
		<?php	
			include "../Product/index.php";
		?>
		</section>  <!--end div content_container-->
	</div>  <!--end div wrapper-->
			
	 <?php	
	 	include "../template/templatefooter.html";
	?>
        
</body>
</html>