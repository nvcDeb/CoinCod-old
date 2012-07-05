<?php
	ob_start();
?>
<!DOCTYPE html">
<html>
<head>
	<meta charset=utf-8" />
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
		<div id="content_container">
		<?php	
			include "../Product/product.php";
		?>
		</div>  <!--end div content_container-->
	</div>  <!--end div wrapper-->
			
	 <?php	
	 	include "../template/templatefooter.html";
	?>
        
</body>
</html>