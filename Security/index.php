<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Security</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../template/templateheader.php";
	?>
    <div id="content_container">
			<h1><img src="../template/template_image/header/security.png"></h1>
			<div class="auction_container">
			<h4>Physical Security</h4>
			<li> Data center access limited to Amazon Web Services data center technicians</li>
			<li> The infrastructure is housed in Amazon-controlled data centers throughout the world</li>
			<li> Those with legitimate business will only know the actual location of the data centers</li>
			<li> The data center is secure with variety of physical controls such as biometric sensors, security cameras and etc.		</li>

			<h4>Software Security</h4>
			In addition to our hoster's system monitoring, Coincod also has an internal team of 24/7/365 of specialist to keep all our system up to date to eliminate potential security vulnerabilities. We also setup a wide range of monitoring solutions for preventing and eliminating attacks to the site. Since we do not use other login methods provided by other developers, thus there will be no worries that your privacy and data will be exposed. 

		<h4>Maintaining Security</h4>
			Here at Coincod we protect you from brute force attacks with rate limiting. All passwords are filtered and encrypted. Login information is always sent over SSL. Coincod has its own security consultant to help identify and prevent new attack vectors. We always test on new features in order to cut out potential attacks.

		<h4>Credit Card Safety</h4>
			When you sign up and buy bid points at Coincod, we do not store any information on our servers. Its handed off to MOLPay, a professional company dedicated to process all sensitive transactions.  
		
		<h4>Security Contact</h4>
			Have a question, concern, or comment about Coincod security?Please email <a href = "mailto:security@coincod.com">security@coincod.com</a> for all inquires.
     
		</div>
	</div>
</div><!--wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
</body>
</html>