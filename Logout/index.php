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
	?>
		<section id="content_container">
		The homepage will be redirect automatically. If it still the same, please <a href="<?php $PREFIX ?>">Click Here</a>
		</section>  <!--end div content_container-->
	</div>  <!--end div wrapper-->        
</body>
</html>