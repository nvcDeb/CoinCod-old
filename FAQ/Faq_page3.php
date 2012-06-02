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
        
		<li><a name="Question11"><strong>Can I undo already submitted bids?</strong></a></li>
        No. Bids that were placed cannot be undone.
        </br></br>
        
		<li><a name="Question12"><strong>Can I bid for the same product more than once?</strong></a></li>
        Yes you may. There are no limits to how many times bids can be placed on an auction.
        </br></br>
        
		<li><a name="Question13"><strong>Can I bid during the night?</strong></a></li>
        All auctions are open for 24 hours. The opening time for each auction is specified on the website. Bids can also be bought 24hours everyday.
        </br></br>
        
		<li><a name="Question14"><strong>How do I know if I am the highest bidder?</strong></a></li>
        Your nickname will appear in the item auction box under the highest bidder column.
        </br></br>
        
		<li><a name="Question15"><strong>How do I know if an auction has ended?</strong></a></li>
        The bid button will be replaced with a red "ENDED" button and the countdown will be replaced with "0:00”.
        </br></br>

		</ol>
		</div>  <!--end div Faq-->
		<br/>        
      	</div>  <!--end div auction_container-->
	</div>  <!--end div content_container-->
</div>  <!--end div wrapper-->
<?php
	include "../template/templatefooter.html";
?>
</body>
</html>
