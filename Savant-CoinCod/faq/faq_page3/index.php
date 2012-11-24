<?php
// Load the Savant3 class file and create an instance.
require_once '../../Savant3.php';

// initialize template engine
$tpl = new Savant3();

// set search path for templates
$tpl->addPath('template', '../../template');

// Create a title.
$template_path = "../../template/";
$resource_path = "../../";
$title = "FAQ";
$meta_description = "Welcome to CoinCod - a unique auction system built to draw everyone closer to their dream products.";

$contentContainer = array(
    array(
        "title" => $title,
        "content" => '<article class="answer">
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
		</article>  <!--end div Faq-->',
		"bottom_image" =>'<img class="bottom" src="../../template/template_image/bottom/faq.png" alt="questions">'
    )
);

// Assign values to the Savant instance.
$tpl->template_path = $template_path;
$tpl->resource_path = $resource_path;
$tpl->title = $title;
$tpl->meta_description = $meta_description;
$tpl->content_container = $contentContainer;

// Display a template using the assigned values.
$tpl->login = $tpl->fetch('login.tpl.php');
$tpl->header = $tpl->fetch('header.tpl.php');
$tpl->footer = $tpl->fetch('footer.tpl.php');
$tpl->display('main.tpl.php');