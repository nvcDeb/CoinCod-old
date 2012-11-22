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
        
		<li><a name="Question16">What happens when I win?</a></li>
        Each auction ends with a winner. Each winner will be contacted by CoinCod team to arrange for delivery of the won item. The winner needs to pay the end price of the product on auction. Also, the delivery fee will be paid for by the winner.
Note: Product cost refers to the final cost of product at which bidding stopped. It is referred on CoinCod as "Current price". It is NOT the retail price of the item.
        
		<li><a name="Question17">How can I buy bids on CoinCod?</a></li>
        At present you can buy bid packages online. Bid packages can be purchased using all e-payment methods that are supported by our electronic payments trading partner.
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
        
		<li><a name="Question18">How long are the free bids valid for?</a></li>
        All free bids have no expiry. They are valid as long as the user keeps itself registered in our database. Please give us time to fill your account with free bids. If it takes longer than a day please send us email so that we can speed up our process.
        
		<li><a name="Question19">I have bought bids and there is a balance on my account. How long are my bids valid for?</a></li>
        There are no expiry date for the bids. They are valid as long as the user keeps their account registered in our database.
        
		<li><a name="Question20">Can I get a refund for unused bids?</a></li>
        No. Purchased bids are non refundable and hence users should only buy as many bids as they are comfortable spending on CoinCod.

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