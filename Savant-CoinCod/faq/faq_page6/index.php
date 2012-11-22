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
        
		<li><a name="Question26">How long before I get my product?</a></li>
        CoinCod will always strive to dispatch products as soon as possible. Products are dispatched normally within 1-2 weeks from receipt of payment. Our delivery timeline is not binding. Customers should contact customer service at <a href="mailto:support@coincod.com">support@coincod.com</a> should they not have received the product within 14 working days after payment.
        
		<li><a name="Question27">I have received a faulty product, what should I do?></a></li>
        Apologies for the inconvenience caused. In rare occasions an item might not work or may get damaged during transport. If such is the case, our aim is to solve the problem as quickly as possible. Please note that in such a case you are obliged to notify our team to <a href="mailto:support@coincod.com">support@coincod.com</a> within 3 days after delivery. It can sometimes be useful to check the manufacturer’s website or call their helpline – many of the most common problems are easily solved without having to return the product. In the event that the product you received is faulty, please contact us at <a href="mailto:support@coincod.com">support@coincod.com</a> and we’ll tell you what to do next. Please let us know the Product ID and the serial number of the product, as these help us to deal with your problem as quickly as possible. We work with a range of different suppliers who are happy to help identify any problems and to replace faulty items if necessary.
        NOTE:Please don’t send the item back to us without contacting us – this could result in a delay between return of your item and a replacement being dispatched. If your product does need replacing, we’ll contact you and let you know when that will be done.
        
		<li><a name="Question28">Can I return the product I have won?</a></li>
        Sorry, the answer is no. In order to be fair towards other users, Coincod do not take refund policy unless its proven it is our fault.
        
		<li><a name="Question29">Where can I read the terms of services in more detail?</a></li>
        The terms of services can be read under the section <a href="../../Terms">Terms of Services</a> on our website.
        
		<li><a name="Question30">If I have additional questions, how do I contact CoinCod?</a></li>
        If you any additional questions please e-mail our customer service at <a href="mailto:support@coincod.com">support@coincod.com</a> You will receive an answer ASAP.
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