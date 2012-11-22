<?php
// Load the Savant3 class file and create an instance.
require_once '../Savant3.php';

// initialize template engine
$tpl = new Savant3();

// set search path for templates
$tpl->addPath('template', '../template');

// Create a title.
$template_path = "../template/";
$resource_path = "../";
$title = "Buy Tokens";
$meta_description = "Welcome to CoinCod - a unique auction system built to draw everyone closer to their dream products.";

$contentContainer = array(
    array(
        "title" => $title,
        "content" => '<div class="buy_tokens">Choose your package by clicking on the button. Please take note that your payment is processed using Paypal. You will also receive a notification e-mail from CoinCod on this transaction.
			</div>'.$tpl->fetch($template_path.'buy_token.tpl.php'),
		"bottom_image" =>'<img class="bottom" src="../template/template_image/bottom/buy_tokens.png" alt="tokens shopping">'
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