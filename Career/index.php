<?php
	session_start();
	include "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Career</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../template/templateheader.php";
	?>
    <section id="content_container">
	<h5>Careers</h5>
    		<section class="auction_container">					
		Sorry, currently there are no available job openings. Please check with us again soon and hopefully we can provide you one in coming few months time.

		<img class="bottom" src="<?php echo $PREFIX; ?>/template/template_image/bottom/careers.png" alt="careers">
	  		</section>  <!--end div auction_container-->
	</section>  <!--end div content_container-->
</div>  <!--wrapper-->

<?php
	include "../template/templatefooter.html";
?>
</body>
</html>