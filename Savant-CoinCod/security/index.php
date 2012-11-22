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
$title = "Security";
$meta_description = "Welcome to CoinCod - a unique auction system built to draw everyone closer to their dream products.";

$contentContainer = array(
    array(
        "title" => $title,
        "content" => '<article>
			
			<h4>Physical Security</h4>
			<li> Data center access limited to Amazon Web Services data center technicians</li>
			<li> The infrastructure is housed in Amazon-controlled data centers throughout the world</li>
			<li> Those with legitimate business will only know the actual location of the data centers</li>
			<li> The data center is secure with variety of physical controls such as biometric sensors, security cameras and etc.		</li>

			<h4>Software Security</h4>
			In addition to our hoster\'s system monitoring, Coincod also has an internal team of 24/7/365 of specialist to keep all our system up to date to eliminate potential security vulnerabilities. We also setup a wide range of monitoring solutions for preventing and eliminating attacks to the site. Since we do not use other login methods provided by other developers, thus there will be no worries that your privacy and data will be exposed. 

		<h4>Maintaining Security</h4>
			Here at Coincod we protect you from brute force attacks with rate limiting. All passwords are filtered and encrypted. Login information is always sent over SSL. Coincod has its own security consultant to help identify and prevent new attack vectors. We always test on new features in order to cut out potential attacks.

		<h4>Credit Card Safety</h4>
			When you sign up and buy bid points at Coincod, we do not store any information on our servers. Its handed off to MOLPay, a professional company dedicated to process all sensitive transactions.  
		
		<h4>Security Contact</h4>
			Have a question, concern, or comment about Coincod security?Please email <a href = "mailto:security@coincod.com">security@coincod.com</a> for all inquires.
		
		</article>',
		"bottom_image" =>'<img class="bottom" src="../template/template_image/bottom/security.png" alt="shield">'
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