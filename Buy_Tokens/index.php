<?php
session_start();
include "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link href="<?php echo $PREFIX; ?>/style.css" rel="stylesheet" type="text/css" />
<title>Buy Tokens</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../template/templateheader.php";
	?>
    <section id="content_container">
	<h5>Buy Tokens</h5>
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
						<h4>Paypal (RM)</h4>
							<li>
								<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
									<input type="hidden" name="cmd" value="_s-xclick">
									<input type="hidden" name="hosted_button_id" value="D83KWGJ6FX9YA">
									<input type="image" src="http://coincod.com/template/price_button/15.png" width="104" height="34" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
									<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
								</form>
							</li>
							<li>
								<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
									<input type="hidden" name="cmd" value="_s-xclick">
									<input type="hidden" name="hosted_button_id" value="X24J6YZZDUN48">
									<input type="image" src="http://coincod.com/template/price_button/30.png" width="104" height="34" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
									<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
								</form>
							</li>
							<li>
								<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
									<input type="hidden" name="cmd" value="_s-xclick">
									<input type="hidden" name="hosted_button_id" value="BXDZPNG8VAQCA">
									<input type="image" src="http://coincod.com/template/price_button/60.png" width="104" height="34" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
									<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
								</form>
							</li>
							<li>
								<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
									<input type="hidden" name="cmd" value="_s-xclick">
									<input type="hidden" name="hosted_button_id" value="QBD5BC7F7S5YW">
									<input type="image" src="http://coincod.com/template/price_button/142.50.png" width="104" height="34" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
									<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
								</form>
							</li>
							<li>
								<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
									<input type="hidden" name="cmd" value="_s-xclick">
									<input type="hidden" name="hosted_button_id" value="QRQHHTB6L7AK2">
									<input type="image" src="http://coincod.com/template/price_button/270.png" width="104" height="34" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
									<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
								</form>
							</li>
							<li>
								<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
									<input type="hidden" name="cmd" value="_s-xclick">
									<input type="hidden" name="hosted_button_id" value="VGJA9EG9CZ2QJ">
									<input type="image" src="http://coincod.com/template/price_button/600.png" width="104" height="34" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
									<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
								</form>
							</li>
							<li>
								<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
									<input type="hidden" name="cmd" value="_s-xclick">
									<input type="hidden" name="hosted_button_id" value="AZR4JZBCWDX2L">
									<input type="image" src="http://coincod.com/template/price_button/1125.png" width="104" height="34" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
									<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
								</form>
							</li>
					</ul>              
				</div>
			
			</div>
		
			<h1><img src="<?php echo $PREFIX; ?>/template/template_image/bottom/buy_tokens.png"></h1>
		</section>  <!--end div auction_container-->
	</section>  <!--end div content_container-->
</div>  <!--wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
</body>
</html>
