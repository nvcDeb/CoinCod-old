<?php
	session_start();
	include "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Location</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../template/templateheader.php";
	?>
    <section id="content_container">
			<h5>Our Location</h5>
		<section class="auction_container">
			<article><iframe width="700" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.my/maps?f=d&amp;source=s_d&amp;saddr=Jalan+Dato+Senu+4&amp;daddr=&amp;geocode=FWi6MAAdeMEPBg&amp;sll=3.193586,101.696888&amp;sspn=0.003037,0.005284&amp;hl=en&amp;mra=mr&amp;ie=UTF8&amp;ll=3.193586,101.696888&amp;spn=0.003037,0.005284&amp;t=m&amp;output=embed"></iframe><small><a href="http://maps.google.com.my/maps?f=d&amp;source=embed&amp;saddr=Jalan+Dato+Senu+4&amp;daddr=&amp;geocode=FWi6MAAdeMEPBg&amp;sll=3.193586,101.696888&amp;sspn=0.003037,0.005284&amp;hl=en&amp;mra=mr&amp;ie=UTF8&amp;ll=3.193586,101.696888&amp;spn=0.003037,0.005284&amp;t=m" style="color:#0000FF;text-align:left">View Larger Map</a></small>
			
			<address><ul>
			<li>Address: </li>
			<li>NexVend Sdn Bhd </li>
			<li>Unit No. 2.17, 2nd Floor, </li> 
			<li>Lobby No. 5, Block A, </li>
			<li>Damansara Intan, No. 1, </li>
			<li>Jalan SS 20/27, </li>
			<li>47400 Petaling Jaya,</li>
			<li>Selangor Darul Ehsan, Malaysia</li>
			</ul>
			</address>
		        
			<div class="location"><img src="<?php echo $PREFIX; ?>/template/template_image/bottom/location.png"></div></article>
		</section>
	</section>
</div><!--wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
</body>
</html>