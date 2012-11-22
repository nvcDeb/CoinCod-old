<?php
// Load the Savant3 class file and create an instance.
require_once '../Savant3.php';
require_once '../template/functions.php';
session_start();
// initialize template engine
$tpl = new Savant3();

// set search path for templates
$tpl->addPath('template', '../template');

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
			$error =  "success update";
		}
		else
		{
			$error = "fail update";
		}


// Create a title.
$template_path = "../template/";
$resource_path = "../";
$title = "Result Update";
$meta_description = "Welcome to CoinCod - a unique auction system built to draw everyone closer to their dream products.";
$product_form = $error;

$contentContainer = array(
    array(
        "title" => $title,
        "content" => $product_form,
		"bottom_image" =>''
    )
);

// Assign values to the Savant instance.
$tpl->template_path = $template_path;
$tpl->resource_path = $resource_path;
$tpl->title = $title;
$tpl->meta_description = $meta_description;
$tpl->content_container = $contentContainer;

// Display a template using the assigned values.
$tpl->login = $tpl->fetch($template_path.'login.tpl.php');
$tpl->header = $tpl->fetch($template_path.'header.tpl.php');
$tpl->footer = $tpl->fetch($template_path.'footer.tpl.php');
$tpl->display($template_path.'main.tpl.php');