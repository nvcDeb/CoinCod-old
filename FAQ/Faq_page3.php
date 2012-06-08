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
	 <h1><a href="index.php"><img src="../template/template_image/header/faq.png"></a></h1>
    	<div class="auction_container">
		
		<div class="answer">
		<ol>
        
		<li><a name="Question11">Can I undo already submitted bids?</a></li>
        No. Bids that were placed cannot be undone.
        
		<li><a name="Question12">Can I bid for the same product more than once?</a></li>
        Yes you may. There are no limits to how many times bids can be placed on an auction.
        
		<li><a name="Question13">Can I bid during the night?</a></li>
        All auctions are open for 24 hours. The opening time for each auction is specified on the website. Bids can also be bought 24hours everyday.
        
		<li><a name="Question14">How do I know if I am the highest bidder?</a></li>
        Your nickname will appear in the item auction box under the highest bidder column.
        
		<li><a name="Question15">How do I know if an auction has ended?</a></li>
        The bid button will be replaced with a red "ENDED" button and the countdown will be replaced with "0:00”.

		</ol>
		</div>  <!--end div Faq-->    
      	</div>  <!--end div auction_container-->
	</div>  <!--end div content_container-->
</div>  <!--end div wrapper-->
<?php
	include "../template/templatefooter.html";
?>
</body>
</html>
