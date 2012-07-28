<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link href="../../template/style.css" rel="stylesheet" type="text/css"  />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>FAQ</title>
</head>

<body>
<div id="wrapper">
     <?php
			include '../../template/templateheader.php';
	?>
     <section id="content_container">
		<h1><a href="index.php"><img src="../../template/template_image/header/faq.png" ></a></h1>
		
    	<article class="auction_container">
		
		<section class="answer">
		<ol>
        
		<li><a name="Question1">What is CoinCod?</a></li>
        Coincod is a revolutionary auction concept. The basic idea is to offer brand new products at very attractive prices. Or we rather term it as "UnAffordable To Affordable".
        
		<li><a name="Question2">How does CoinCod work?</a></li>
        Every day Coincod sells new branded products at incredibly low prices in auctions. With each placed bid, the price of the auctioned item decreases or increases by 1 cent ($0.01). Once an auction has started and you bid, we reset the countdown back to its limit time. If no-one else bids before the clock has reached countdown, you win the auction item at a bargain price!
        
		<li><a name="Question3">How can I start using CoinCod?</a></li>
        You need to register as a user at coincod.com. It will take you 1 minute. After a successful completion you can buy bids on our site and participate in any auctions you wish. 
        
		<li><a name="Question4">How do I participate in the auction?</a></li>
        In order to participate you need to submit a bid in an ongoing auction. You can either place a bid by sending a text message from your mobile phone or by bidding through a Coincod online account. Creating a Coincod account is easy, simply click on "sign up" and follow the instructions. Once registered, you can upload bids on your account through all channels (e.g. e-banking) that are available.
        
		<li><a name="Question5">There is an auction that ended today and now I see it re-listed. Why?</a></li>
        True, there is a possibility that it might happen. This is when the auction winner turns out to be fraudulent – for example someone who has registered multiple accounts in our system without entering any personal data and automatically received free bids for each username created. All bids by such fraud users will be considered void and the auction will be re-listed from the same point when it ended so that real users can have a possibility to win it. Our support team is doing its best on a daily basis to filter such cases.

		</ol>
		</section>  <!--end div faq-->  
			<h1><img src="../../template/template_image/bottom/faq.png"></h1>
	  	</article>  <!--end div auction_container-->
	</section>  <!--end div content_container-->
</div>  <!--wrapper-->
	<?php
		include "../../template/templatefooter.html";
	?>
</body>
</html>
