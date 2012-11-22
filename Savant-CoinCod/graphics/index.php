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
$title = "Graphics";
$meta_description = "Welcome to CoinCod - a unique auction system built to draw everyone closer to their dream products.";

$contentContainer = array(
    array(
        "title" => $title,
        "content" => '<section id="graphics">
			
			<img src="../template/template_image/bottom/buy_tokens.png" alt="tokens shopping"><a href="download?file=buy_tokens.png">Download</a>
			<img src="../template/template_image/bottom/careers.png" alt="careers"><a href="download?file=careers.png">Download</a>
			<img src="../template/template_image/bottom/contacts.png" alt="contact us"><a href="download?file=contacts.png">Download</a>
			<img src="../template/template_image/bottom/faq.png" alt="questions"><a href="download?file=faq.png">Download</a>
			<img src="../template/template_image/bottom/graphics.png" alt="drawing"><a href="download?file=graphics.png">Download</a>
			<img src="../template/template_image/bottom/how_it_works.png" alt="how works"><a href="download?file=how_it_works.png">Download</a>
			<img src="../template/template_image/bottom/location.png" alt="pointer"><a href="download?file=location.png">Download</a>
			<img src="../template/template_image/bottom/privacy.png" alt="lock"><a href="download?file=privacy.png">Download</a>
			<img src="../template/template_image/bottom/security.png" alt="shield"><a href="download?file=security.png">Download</a>
			<img src="../template/template_image/bottom/site_status.png" alt="communicating"><a href="download?file=site_status.png">Download</a>
			<img src="../template/template_image/bottom/sorry.png" alt="sorry look"><a href="download?file=sorry.png">Download</a>
			<img src="../template/template_image/bottom/term_of_service.png" alt="focus"><a href="download?file=term_of_service.png">Download</a>
			
		</section>',
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