<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Result Update</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="validation/css/validation.css" type="text/css" />
  	<script type="text/javascript" src="validation/livevalidation_standalone.compressed.js"></script>
</head>
<body>
<div id="wrapper">
	<?php
		include "templateheader.php";
	?>
  <section id="content_container">
	<section class="site_body">
    <section div class="auction_container">
	<?php  
	// connect to your MySQL database here 
	include "server.php"; 
	session_start();
	// Set some values to go into the table fields for this person(record) 
	$pid = mysql_real_escape_string($_POST['pid']);
	$newbrand = mysql_real_escape_string($_POST['brand']);
	$newmodel = mysql_real_escape_string($_POST['model']);
	$newmarketprice = mysql_real_escape_string($_POST['marketprice']);
	$newauctionprice = mysql_real_escape_string($_POST['auctionprice']);
	$newcategory=mysql_real_escape_string($_POST['category']);
	$newavailability=mysql_real_escape_string($_POST['availability']);
	$newdescription=mysql_real_escape_string($_POST['description']);
	
	$newpasswords = md5($newpassword); //MD5 encryption.	
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
		include "templatefooter.html";
	?>
	
	</body>
    </html>