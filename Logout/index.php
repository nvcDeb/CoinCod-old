<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
		<section div id="content_container">
		<?php	
			include "../Product/product.php";
		?>
		</div></section>  <!--end div content_container-->
	</div>  <!--end div wrapper-->
			
	 <?php	
	 	include "../template/templatefooter.html";
	?>
        
</body>
</html>