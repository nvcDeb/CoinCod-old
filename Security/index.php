<?php
	session_start();
	include "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Security</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../template/templateheader.php";
	?>
    <section id="content_container">
			<h5>Security</h5>
			<section class="auction_container">
			<article>
			
			<h2>Physical Security</h2>
			<li> Data center access limited to Amazon Web Services data center technicians</li>
			<li> The infrastructure is housed in Amazon-controlled data centers throughout the world</li>
			<li> Those with legitimate business will only know the actual location of the data centers</li>
			<li> The data center is secure with variety of physical controls such as biometric sensors, security cameras and etc.		</li>

			<h2>Software Security</h2>
			In addition to our hoster's system monitoring, Coincod also has an internal team of 24/7/365 of specialist to keep all our system up to date to eliminate potential security vulnerabilities. We also setup a wide range of monitoring solutions for preventing and eliminating attacks to the site. Since we do not use other login methods provided by other developers, thus there will be no worries that your privacy and data will be exposed. 

		<h2>Maintaining Security</h2>
			Here at Coincod we protect you from brute force attacks with rate limiting. All passwords are filtered and encrypted. Login information is always sent over SSL. Coincod has its own security consultant to help identify and prevent new attack vectors. We always test on new features in order to cut out potential attacks.

		<h2>Credit Card Safety</h2>
			When you sign up and buy bid points at Coincod, we do not store any information on our servers. Its handed off to MOLPay, a professional company dedicated to process all sensitive transactions.  
		
		<h2>Security Contact</h2>
			Have a question, concern, or comment about Coincod security?Please email <a href = "mailto:security@coincod.com">security@coincod.com</a> for all inquires.
		
		</article>	
			
			<h1><img src="<?php echo $PREFIX; ?>/template/template_image/bottom/security.png" alt="shield"></h1>
			
		</section>
	</section>
</div><!--wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
</body>
</html>