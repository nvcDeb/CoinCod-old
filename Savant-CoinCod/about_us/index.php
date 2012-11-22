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
$title = "About Us";
$meta_description = "Welcome to CoinCod - a unique auction system built to draw everyone closer to their dream products.";

$contentContainer = array(
    array(
        "title" => $title,
        "content" => "Coincod was founded in 2012 because we believe in helping our customers to challenge the status quo of the current auction method. By challenging the status quo, we try our best on lowering the barriers so that everyone can obtain their products and at the same time enjoying the best auction experience. This auction system is based on the unique worldwide concept which we ensure every user of ours will have great pleasure throughout the process. At Coincod we supply all the best branded and new high quality products. You name it, we have it. In order to fulfill our manifesto, the Coincod team will handle all our users' goods personally from buying, packaging and shipping.",
		"bottom_image" =>""
    ),
    array(
        'title' => 'Contacts',
        'content' => 'Need more support? Contact us at <a href = "mailto:support@coincod.com">support@coincod.com</a> for all support.',
		"bottom_image" =>'<img class="bottom" src="../template/template_image/bottom/contacts.png" alt="contact us">'
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