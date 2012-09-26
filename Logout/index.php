<?php
	ob_start();
	include "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" HTTP-EQUIV="Refresh" CONTENT="0;URL=<?php echo $PREFIX; ?>"/>
	<title>Logout</title>
</head>

<body>
	<div id="wrapper">
	<?php
		session_start();
		session_destroy();
		unset( $_SESSION );
	?>	
	</div>  <!--end div wrapper-->
        
</body>
</html>