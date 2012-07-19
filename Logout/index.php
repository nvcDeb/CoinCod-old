<?php
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>Logout</title>
</head>

<body>
	<div id="wrapper">
	<?php
		session_start();
		session_destroy();
		unset( $_SESSION );
		include"../server.php";
		include "../template/templateheader.php";
	?>
		<section id="content_container">
		<section id="banner_image">
		<img src="../template/template_image/banner.png" width="1015px" border="0">
		</section>
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