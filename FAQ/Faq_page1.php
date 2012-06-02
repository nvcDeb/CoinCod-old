<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>FAQ</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../template/templateheader.php";
	?>
     <div id="content_container">
    	<div class="auction_container">
		
		<h1><a href="index.php"><img src="../template/template_image/header/faq.png" border="0"></a></h1>
		<div class="faq">
		<ol>
        
		<li><a name="Question1"><strong>What is CoinCod?</strong></a></li>
        Coincod is a revolutionary auction concept. The basic idea is to offer brand new products at very attractive prices. Or we rather term it as "UnAffordable To Affordable".
        </br></br>
        
		<li><a name="Question2"><strong>How does CoinCod work?</strong></a></li>
        Every day Coincod sells new branded products at incredibly low prices in auctions. With each placed bid, the price of the auctioned item decreases or increases by 1 cent ($0.01). Once an auction has started and you bid, we reset the countdown back to its limit time. If no-one else bids before the clock has reached countdown, you win the auction item at a bargain price!
        </br></br>
        
		<li><a name="Question3"><strong>How can I start using CoinCod?</strong></a></li>
        You need to register as a user at coincod.com. It will take you 1 minute. After a successful completion you can buy bids on our site and participate in any auctions you wish. 
        </br></br>
        
		<li><a name="Question4"><strong>How do I participate in the auction?</strong></a></li>
        In order to participate you need to submit a bid in an ongoing auction. You can either place a bid by sending a text message from your mobile phone or by bidding through a Coincod online account. Creating a Coincod account is easy, simply click on "sign up" and follow the instructions. Once registered, you can upload bids on your account through all channels (e.g. e-banking) that are available.
        </br></br>
        
		<li><a name="Question5"><strong>There is an auction that ended today and now I see it re-listed. Why?</strong></a></li>
        True, there is a possibility that it might happen. This is when the auction winner turns out to be fraudulent – for example someone who has registered multiple accounts in our system without entering any personal data and automatically received free bids for each username created. All bids by such fraud users will be considered void and the auction will be re-listed from the same point when it ended so that real users can have a possibility to win it. Our support team is doing its best on a daily basis to filter such cases.
        </br></br>

		</ol>
		</div>  <!--end div faq-->        
	  	</div>  <!--end div auction_container-->
	</div>  <!--end div content_container-->
</div>  <!--wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
</body>
</html>
