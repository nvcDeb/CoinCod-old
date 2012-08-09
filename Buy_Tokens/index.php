<?php
session_start();
include "../server.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Buy Tokens</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../template/templateheader.php";
	?>
    <section id="content_container">
	<h1><img src="../template/template_image/header/buy_tokens.png"></h1>
		<section class="auction_container">	 
			<div class="buy_tokens">Choose your package by clicking on the button. Please take note that your payment is processed by Netbuilder.The Name of NbePay will be shown on your Credit Card / Bank Statement and you will also receive a notification e-mail from Netbuilder on this transaction.
			</div>
		
			<div class="package_value">
			
				<div class="ul">
					<ul class="token_nav">
						<h4>Token Packages</h4>
							<li>
								<div class="token_value">50 tokens</div>
							</li>
							<li>
								<div class="token_value">100 tokens</div>
							</li>
							<li>
								<div class="token_value">200 tokens</div>
							</li>
								<li>
								<div class="token_value">500 tokens (5% discount)</div>
							</li>
							<li>
								<div class="token_value">1000 tokens (10% discount)</div>
							</li>
							<li>
								<div class="token_value">2500 tokens (20% discount)</div>
							</li>
							<li>
								<div class="token_value">5000 tokens (25% discount)</div>
							</li>
					</ul>
                
					<ul class="token_nav">
						<h4>Debit/Credit Card(RM)</h4>
							<li>
								<a href="#"><div class="price_button">15.00</div></a>
							</li>
							<li>
								<a href="#"><div class="price_button">30.00</div></a>
							</li>
							<li>
								<a href="#"><div class="price_button">60.00</div></a>
							</li>
							<li>
								<a href="#"><div class="price_button">142.50</div></a>
							</li>
							<li>
								<a href="#"><div class="price_button">270.00</div></a>
							</li>
							<li>
								<a href="#"><div class="price_button">600.00</div></a>
							</li>
							<li>
								<a href="#"><div class="price_button">1125.00</div></a>
							</li>
					</ul> 
                
					<ul class="token_nav">
						<h4>PayPal(RM)</h4>
							<li>
								<a href="#"><div class="price_button">15.00</div></a>
							</li>
							<li>
								<a href="#"><div class="price_button">30.00</div></a>
							</li>
							<li>
								<a href="#"><div class="price_button">60.00</div></a>
							</li>
							<li>
								<a href="#"><div class="price_button">142.50</div></a>
							</li>
							<li>
								<a href="#"><div class="price_button">270.00</div></a>
							</li>
							<li>
								<a href="#"><div class="price_button">600.00</div></a>
							</li>
							<li>
								<a href="#"><div class="price_button">1125.00</div></a>
							</li>
					</ul>
                
               
				</div>
			
			</div>
		
			<h1><img src="../template/template_image/bottom/buy_tokens.png"></h1>
		</section>  <!--end div auction_container-->
	</section>  <!--end div content_container-->
</div>  <!--wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
</body>
</html>
