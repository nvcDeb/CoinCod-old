<?php
	session_start();
	include "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>About Us</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../template/templateheader.php";
	?>
    <section id="content_container">
	<h1><img src="<?php echo $PREFIX; ?>/template/template_image/header/about_us.png"></h1>
    		<article class="auction_container">
					
		Coincod was founded in 2012 because we believe in helping our customers to challenge the status quo of the current auction method. By challenging the status quo, we try our best on lowering the barriers so that everyone can obtain their products and at the same time enjoying the best auction experience. This auction system is based on the unique worldwide concept which we ensure every user of ours will have great pleasure throughout the process. At Coincod we supply all the best branded and new high quality products. You name it, we have it. In order to fulfill our manifesto, the Coincod team will handle all our users' goods personally from buying, packaging and shipping.
		
			</article>
      
    <h1><img src="<?php echo $PREFIX; ?>/template/template_image/header/contacts.png"></h1>
	  <article class="auction_container">
		Need more support? Contact us at <a href = "mailto:support@coincod.com">support@coincod.com</a> for all support.
       
	    <h1><img src="<?php echo $PREFIX; ?>/template/template_image/bottom/contacts.png"></h1>
	  </article> <!--end div auction_container-->
	</section>  <!--end div content_container-->
</div>  <!--wrapper-->
<?php
	include "../template/templatefooter.html";
?>
</body>
</html>
