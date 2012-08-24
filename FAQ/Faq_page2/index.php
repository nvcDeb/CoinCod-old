<?php
	session_start();
	include "../../config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link href="<?php echo $PREFIX; ?>/template/style.css" rel="stylesheet" type="text/css"  />
	<meta charset="utf-8" />
	<title>FAQ</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../../template/templateheader.php";
	?>
     <section id="content_container">
	 		<h5>FAQ</h5>
			
    	<section class="auction_container">
		
		<article class="answer">
		<ol>
        
		<li><a name="Question6">Are the products being sold all new?</a></li>
        Yes. All products sold are brand new and come from respected manufacturers. All products come with relevant warranties from the factory but not from CoinCod unless its proven it is the fault of CoinCod.
        
		<li><a name="Question7">How much does it cost for me to place a bid?</a></li>
        To submit a bid through CoinCod account it costs RM0.30 for one token. We have different amount of token that allows users to buy them at once.
        
		<li><a name="Question8">I don’t live in the Malaysia. Can I still participate in CoinCod's auctions?</a></li>
        Currently the answer is still no. CoinCod is currently open for Malaysian residents only. But we hope to extend the services to other countries soon. Hopefully our users can wait patiently.
        
		<li><a name="Question9">Is the warranty on the goods that I bid for an win in the auctions?</a></li>
        All products come with relevant warranties where applicable. Please read section 5 under our Terms of Services for further details.
        
		<li><a name="Question10">What happens if at a new auction only one bid is being submitted and nobody else raises the bid?</a></li>
        The auction closes once the countdown timer reaches 0 (zero) and the product is sold to that single bidder.
        
		</ol>
		</article>  <!--end div faq-->  
			<h1><img src="<?php echo $PREFIX; ?>/template/template_image/bottom/faq.png"></h1>
	  	</section>  <!--end div auction_container-->
	</section>  <!--end div content_container-->
</div>  <!--end div wrapper-->
<?php
	include "../../template/templatefooter.html";
?>
</body>
</html>
