<?php
	  ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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