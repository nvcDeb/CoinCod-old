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
$title = "FAQ";
$meta_description = "Welcome to CoinCod - a unique auction system built to draw everyone closer to their dream products.";

$contentContainer = array(
    array(
        "title" => $title,
        "content" => '<article class="faq">
		<ol>
		<li><a href="faq_page1#Question1">What is CoinCod?</a></li>
		<li><a href="faq_page1#Question2">How does CoinCod work?</a></li>
		<li><a href="faq_page1#Question3">How can I start using CoinCod?</a></li>
		<li><a href="faq_page1#Question4">How do I participate in the auction?</a></li>
		<li><a href="faq_page1#Question5">There is an auction that ended today and now I see it re-listed. Why?</a></li>
		<li><a href="faq_page2#Question6">Are the products being sold all new?</a></li>
		<li><a href="faq_page2#Question7">How much does it cost for me to place a bid?</a></li>
		<li><a href="faq_page2#Question8">I don\'t live in the Malaysia. Can I still participate in CoinCod\'s auctions?</a></li>
		<li><a href="faq_page2#Question9">Is the warranty on the goods that I bid for an win in the auctions?</a></li>
		<li><a href="faq_page2#Question10">What happens if at a new auction only one bid is being submitted and nobody else raises the bid?</a></li>
		<li><a href="faq_page3#Question11">Can I undo already submitted bids?</a></li>
		<li><a href="faq_page3#Question12">Can I bid for the same product more than once?</a></li>
		<li><a href="faq_page3#Question13">Can I bid during the night?</a></li>
		<li><a href="faq_page3#Question14">How do I know if I am the highest bidder?</a></li>
		<li><a href="faq_page3#Question15">How do I know if an auction has ended?</a></li>
		<li><a href="faq_page4#Question16">What happens when I win?</a></li>
		<li><a href="faq_page4#Question17">How can I buy bids on CoinCod?</a></li>
		<li><a href="faq_page4#Question18">How long are the free bids valid for?</a></li>
		<li><a href="faq_page4#Question19">I have bought bids and there is a balance on my account. How long are my bids valid for?</a></li>
		<li><a href="faq_page4#Question20">Can I get a refund for unused bids?</a></li>
		<li><a href="faq_page5#Question21">How secure are your payment methods?</a></li>
		<li><a href="faq_page5#Question22">How do I pay for the product that I have won?</a></li>
		<li><a href="faq_page5#Question23">Will you store my credit card details?</a></li>
		<li><a href="faq_page5#Question24">How long does it take until the product is delivered?</a></li>
		<li><a href="faq_page5#Question25">What is the cost of delivery?</a></li>
		<li><a href="faq_page6#Question26">How long before I get my product?</a></li>
		<li><a href="faq_page6#Question27">I have received a faulty product, what should I do?</a></li>
		<li><a href="faq_page6#Question28">Can I return the product I have won?</a></li>
		<li><a href="faq_page6#Question29">Where can I read the terms of services in more detail?</a></li>
		<li><a href="faq_page6#Question30">If I have additional questions, how do I contact CoinCod?</a></li>
		</ol>
		
		</article>  <!--end div faq-->',
		"bottom_image" =>'<img class="bottom" src="../template/template_image/bottom/faq.png" alt="questions">'
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