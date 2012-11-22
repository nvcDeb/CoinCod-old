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
        
		<li><a name="Question6">Are the products being sold all new?</a></li>
        Yes. All products sold are brand new and come from respected manufacturers. All products come with relevant warranties from the factory but not from CoinCod unless its proven it is the fault of CoinCod.
        
		<li><a name="Question7">How much does it cost for me to place a bid?</a></li>
        To submit a bid through CoinCod account it costs RM0.30 for one token. We have different amount of token that allows users to buy them at once.
        
		<li><a name="Question8">I don’t live in the Malaysia. Can I still participate in CoinCod\'s auctions?</a></li>
        Currently the answer is still no. CoinCod is currently open for Malaysian residents only. But we hope to extend the services to other countries soon. Hopefully our users can wait patiently.
        
		<li><a name="Question9">Is the warranty on the goods that I bid for an win in the auctions?</a></li>
        All products come with relevant warranties where applicable. Please read section 5 under our Terms of Services for further details.
        
		<li><a name="Question10">What happens if at a new auction only one bid is being submitted and nobody else raises the bid?</a></li>
        The auction closes once the countdown timer reaches 0 (zero) and the product is sold to that single bidder.
        
		</ol>
		</article>  <!--end div faq-->  ',
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