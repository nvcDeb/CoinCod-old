<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Product Result</title>
	<link href="../template/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
	<?php
		include "../template/templateheader.php";
	?>
    <div id="content_container">
		<div class="auction_container">
	<?php  
	// connect to your MySQL database here 
	include "../server.php"; 
	session_start(); 

	$brand = mysql_real_escape_string($_POST['brand']);
	$model = mysql_real_escape_string($_POST['model']);
	$marketprice = mysql_real_escape_string($_POST['marketprice']);
	$auctionprice = mysql_real_escape_string($_POST['auctionprice']);
	$category = mysql_real_escape_string($_POST['category']);
	$availability = mysql_real_escape_string($_POST['availablity']);
	$description = mysql_real_escape_string($_POST['description']);
	$image = mysql_real_escape_string($_POST['image']);
	
	$product_check=mysql_query("SELECT * FROM product_list WHERE Brand='$brand' and Model='$model' LIMIT 1");
	$productcheck = mysql_num_rows($product_check);
	if($productcheck > 0)
	{
		echo "Sorry! The product is being duplicated. This should not happen!!!";
	}
	else
	{
		$getid=mysql_query("SELECT * FROM product_list WHERE product_id = (select Max(product_id) from product_list);");
		$getId = mysql_fetch_array($getid);
		$max_id = $getId["Product_Id"];
		$productid = $max_id + 1;

		$product_insert = "INSERT INTO product_list(product_id,Brand, Model, market_price, auction_price, Category, Availability,Description) VALUES('$productid','$brand','$model','$marketprice','$auctionprice','$category','$availability','$description')";  
		$productinsert = mysql_query($product_insert) or die (mysql_error()); 		
		
		//insert to product_images
		$productname="$productid.jpg";
		move_uploaded_file($_FILES["image"]["tmp_name"],"product_image/$productname");
	
		if($productinsert == 1)
		{
			echo "Product is successfully saved into database<br/>";
		}
		else
		{
			echo "Product failed to be saved.";
		}
	}
	?>
    
		</div><!--end div auction_container-->
	</div><!--end div content_container-->
</div><!--end div wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
	
	</body>
    </html>