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
    	<section class="auction_container">
		<h5>FAQ</h5>
		<article class="answer">
		<ol>
        
		<li><a name="Question21"><strong>How secure are your payment methods?</strong></a></li>
        We use high-security 128-bit encoding (SSL) to protect your payment details when processing the online payment. This service is provided to us by NetBuilder.com.my who have a long term reliable and stable reputation in that field. Your credit card details will not be entered nor stored into our database and they cannot be seen by any of our staff. Besides the security that were provided by NetBuilder, our security team will ensure leaks during the transaction will not happen by providing more encryption and security.
        
		<li><a name="Question22"><strong>How do I pay for the product that I have won?</strong></a></li>
        You can pay for your item through all e-payment methods that are available on our website.
			<ul>
			<li>Visa</li>
			<li>Mastercard</li>
			<li>Maybank e-banking</li>
			<li>CIMB Bank e-banking</li>
			<li>Public Bank e-banking</li>
			<li>Ambank e-banking</li>
			<li>Hong Leong Bank e-banking</li>
			<li>RHB Bank e-banking</li>
			<li>OCBC Bank e-banking</li>
			<li>Alliance Bank e-banking</li>
			<li>Eon Bank e-banking</li>
			<li>Bank Islam e-banking</li>
			<li>Paypal</li>
			<li>FPX, mobile money, meps cash, web cash</li>
			</ul>
         
		<li><a name="Question23"><strong>Will you store my credit card details?</strong></a></li>
        No. Your credit card details will not be entered nor stored in our database and they cannot be seen by any of our staff. You will enter them only during making a credit card payment using a secure method provided by NetBuilder.com.my. 
        
		<li><a name="Question24"><strong>How long does it take until the product is delivered?</strong></a></li>
        Products are usually shipped within 14 working days after the payment.
        
		<li><a name="Question25"><strong>What is the cost of delivery?</strong></a></li>
        The winner of the auction pays for all delivery fees of the item. If you are interested in a delivery cost of a specific item then please refer to the specific auction you are interested in. Rates vary between auctions due to the size and weight of the products and destination of delivery. Rates are indicated for all destinantions within Malaysia.

</ol>
		</article>  <!--end div answer--> 
		<h1><img src="<?php echo $PREFIX; ?>/template/template_image/bottom/faq.png" alt="questions"></h1>
      	</section>  <!--end div auction_container-->
	</section>  <!--end div content_container-->
</div>  <!--end div wrapper-->
	<?php
		include "../../template/templatefooter.html";
	?>
</body>
</html>
