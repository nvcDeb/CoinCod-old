<?php
	session_start();
	include "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>FAQ</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../template/templateheader.php";
	?>
   	
	<section id="content_container">
	<h1><img src="<?php echo $PREFIX; ?>/template/template_image/header/faq.png"></h1>
		<section class="auction_container">
		<article class="faq">
		<ol>
		<li><a href="Faq_page1#Question1">What is CoinCod?</a></li>
		<li><a href="Faq_page1#Question2">How does CoinCod work?</a></li>
		<li><a href="Faq_page1#Question3">How can I start using CoinCod?</a></li>
		<li><a href="Faq_page1#Question4">How do I participate in the auction?</a></li>
		<li><a href="Faq_page1#Question5">There is an auction that ended today and now I see it re-listed. Why?</a></li>
		<li><a href="Faq_page2#Question6">Are the products being sold all new?</a></li>
		<li><a href="Faq_page2#Question7">How much does it cost for me to place a bid?</a></li>
		<li><a href="Faq_page2#Question8">I don’t live in the Malaysia. Can I still participate in CoinCod's auctions?</a></li>
		<li><a href="Faq_page2#Question9">Is the warranty on the goods that I bid for an win in the auctions?</a></li>
		<li><a href="Faq_page2#Question10">What happens if at a new auction only one bid is being submitted and nobody else raises the bid?</a></li>
		<li><a href="Faq_page3#Question11">Can I undo already submitted bids?</a></li>
		<li><a href="Faq_page3#Question12">Can I bid for the same product more than once?</a></li>
		<li><a href="Faq_page3#Question13">Can I bid during the night?</a></li>
		<li><a href="Faq_page3#Question14">How do I know if I am the highest bidder?</a></li>
		<li><a href="Faq_page3#Question15">How do I know if an auction has ended?</a></li>
		<li><a href="Faq_page4#Question16">What happens when I win?</a></li>
		<li><a href="Faq_page4#Question17">How can I buy bids on CoinCod?</a></li>
		<li><a href="Faq_page4#Question18">How long are the free bids valid for?</a></li>
		<li><a href="Faq_page4#Question19">I have bought bids and there is a balance on my account. How long are my bids valid for?</a></li>
		<li><a href="Faq_page4#Question20">Can I get a refund for unused bids?</a></li>
		<li><a href="Faq_page5#Question21">How secure are your payment methods?</a></li>
		<li><a href="Faq_page5#Question22">How do I pay for the product that I have won?</a></li>
		<li><a href="Faq_page5#Question23">Will you store my credit card details?</a></li>
		<li><a href="Faq_page5#Question24">How long does it take until the product is delivered?</a></li>
		<li><a href="Faq_page5#Question25">What is the cost of delivery?</a></li>
		<li><a href="Faq_page6#Question26">How long before I get my product?</a></li>
		<li><a href="Faq_page6#Question27">I have received a faulty product, what should I do?</a></li>
		<li><a href="Faq_page6#Question28">Can I return the product I have won?</a></li>
		<li><a href="Faq_page6#Question29">Where can I read the terms of services in more detail?</a></li>
		<li><a href="Faq_page6#Question30">If I have additional questions, how do I contact CoinCod?</a></li>
		</ol>
		
		</article>  <!--end div faq-->
		
		<h1><img src="<?php echo $PREFIX; ?>/template/template_image/bottom/faq.png"></h1>
	  	</section>  <!--end div auction_container-->
	</section>  <!--end div content_container-->
</div>  <!--wrapper-->
<?php
	include "../template/templatefooter.html";
?>
</body>
</html>
