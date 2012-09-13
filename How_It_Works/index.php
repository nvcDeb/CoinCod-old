<?php
	session_start();
	include "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>How It Works</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../template/templateheader.php";
	?>
     <section id="content_container">
				<h5>How It Works</h5>
    		<section class="auction_container">
					<img src="<?php echo $PREFIX; ?>/template/template_image/Coming-soon.gif" alt="coming soon" width="540px" height="380px">
					
					<h1><img src="<?php echo $PREFIX; ?>/template/template_image/bottom/sorry.png" alt="how works"></h1>
	  		</section>  <!--end div auction_container-->
	</section>  <!--end div content_container-->
</div>  <!--wrapper-->
<?php
	include "../template/templatefooter.html";
?>
</body>
</html>