<?php
	session_start();
	include "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Result Update</title>
	<link href="<?php echo $PREFIX; ?>/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo $PREFIX; ?>/validation/css/validation.css" type="text/css" />
  	<script type="text/javascript" src="<?php echo $PREFIX; ?>/validation/livevalidation_standalone.compressed.js"></script>
</head>
<body>
<div id="wrapper">
	<?php
		include "../template/templateheader.php";
	?>
  <section id="content_container">
	<section class="site_body">
    <section div class="auction_container">
	<?php  
	// Set some values to go into the table fields for this person(record) 
	$pid = mysql_real_escape_string($_POST['pid']);
	$newbrand = mysql_real_escape_string($_POST['brand']);
	$newmodel = mysql_real_escape_string($_POST['model']);
	$newmarketprice = mysql_real_escape_string($_POST['marketprice']);
	$newauctionprice = mysql_real_escape_string($_POST['auctionprice']);
	$newcategory=mysql_real_escape_string($_POST['category']);
	$newavailability=mysql_real_escape_string($_POST['availability']);
	$newdescription=mysql_real_escape_string($_POST['tinyeditor']);
	
	$update_product = "UPDATE product_list SET Brand='$newbrand', Model='$newmodel', market_price='$newmarketprice', auction_price='$newauctionprice', Category='$newcategory', Availability='$newavailability',Description='$newdescription' WHERE product_id='$pid'";
		$update = mysql_query($update_product) or die (mysql_error()); 
		
		mysql_close(); 
		if($update == 1)
		{
			echo "success update";
		}
		else
		{
			echo "fail update";
		}
?>
	</section><!--end div auction_container-->
    </section><!--end div site_body-->
  </section><!--end div content_container-->
</div><!--end div wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
	
	</body>
    </html>