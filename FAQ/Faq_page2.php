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
        
		<li><a name="Question6"><strong>Are the products being sold all new?</strong></a></li>
        Yes. All products sold are brand new and come from respected manufacturers. All products come with relevant warranties from the factory but not from CoinCod unless its proven it is the fault of CoinCod.
        </br></br>
        
		<li><a name="Question7"><strong>How much does it cost for me to place a bid?</strong></a></li>
        To submit a bid through CoinCod account it costs RM0.30 for one token. We have different amount of token that allows users to buy them at once.
        </br></br>
        
		<li><a name="Question8"><strong>I don’t live in the Malaysia. Can I still participate in CoinCod's auctions?</strong></a></li>
        Currently the answer is still no. CoinCod is currently open for Malaysian residents only. But we hope to extend the services to other countries soon. Hopefully our users can wait patiently.
        </br></br>
        
		<li><a name="Question9"><strong>Is the warranty on the goods that I bid for an win in the auctions?</strong></a></li>
        All products come with relevant warranties where applicable. Please read section 5 under our Terms of Services for further details.
        </br></br>
        
		<li><a name="Question10"><strong>What happens if at a new auction only one bid is being submitted and nobody else raises the bid?</strong></a></li>
        The auction closes once the countdown timer reaches 0 (zero) and the product is sold to that single bidder.
		</br></br>
        
		</ol>
		</div>  <!--end div faq-->
		<br/>        
	  	</div>  <!--end div auction_container-->
	</div>  <!--end div content_container-->
</div>  <!--end div wrapper-->
<?php
	include "../template/templatefooter.html";
?>
</body>
</html>
