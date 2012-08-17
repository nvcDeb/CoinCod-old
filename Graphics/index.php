<?php
	session_start();
	include "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Graphics</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../template/templateheader.php";
	?>
	<section id="content_container">
			<h1><img src="<?php echo $PREFIX; ?>/template/template_image/header/graphics.png"></h1>
		<section class="auction_container">
			<img src="<?php echo $PREFIX; ?>/template/template_image/Coming-soon.gif" width="540px" height="380px"><p>
			
			<h1><img src="<?php echo $PREFIX; ?>/template/template_image/bottom/sorry.png"></h1>
		</section>
	 
	</section>
</div><!--wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
</body>
</html>