<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Location</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../template/templateheader.php";
	?>
    <section div id="content_container">
			<h1><img src="../template/template_image/header/location.png"></h1>
		<section div class="auction_container">
			<iframe width="700" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.my/maps?f=d&amp;source=s_d&amp;saddr=Jalan+Dato+Senu+4&amp;daddr=&amp;geocode=FWi6MAAdeMEPBg&amp;sll=3.193586,101.696888&amp;sspn=0.003037,0.005284&amp;hl=en&amp;mra=mr&amp;ie=UTF8&amp;ll=3.193586,101.696888&amp;spn=0.003037,0.005284&amp;t=m&amp;output=embed"></iframe><small><a href="http://maps.google.com.my/maps?f=d&amp;source=embed&amp;saddr=Jalan+Dato+Senu+4&amp;daddr=&amp;geocode=FWi6MAAdeMEPBg&amp;sll=3.193586,101.696888&amp;sspn=0.003037,0.005284&amp;hl=en&amp;mra=mr&amp;ie=UTF8&amp;ll=3.193586,101.696888&amp;spn=0.003037,0.005284&amp;t=m" style="color:#0000FF;text-align:left">View Larger Map</a></small>
			
			<address><ul>
			<li>Address: </li>
			<li>NexVend, </li>
			<li>No.70, Jalan 4, </li> 
			<li>Taman Dato Senu, </li>
			<li>Sentul, </li>
			<li>51000 Kuala Lumpur. </li>
			</ul>
			</address>
		        
			<location><img src="../template/template_image/bottom/location.png"></location>
		</div></section>
	</div></section>
</div><!--wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
</body>
</html>