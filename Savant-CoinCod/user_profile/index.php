<?php
// Load the Savant3 class file and create an instance.
require_once '../Savant3.php';

session_start();
$id = $_SESSION['user_id'];
// initialize template engine
$tpl = new Savant3();

// set search path for templates
$tpl->addPath('template', '../template');

// Create a title.
$template_path = "../template/";
$resource_path = "../";
$title = "User Profile Information";
$meta_description = "Welcome to CoinCod - a unique auction system built to draw everyone closer to their dream products.";
$admin_link ="<div id='admin_menu'>
				<a href='../user_profile/?id=$id'>Profile</a>&ndash;
        		<a href='../admin_site/product_form.php'>Add Product </a>&ndash;
				<a href='../admin_site/user_list.php'>User Listing</a>&ndash;
				<a href='../admin_site/sitestatus_updateform.php'>Site Status</a>
			</div></br>";
$content_info = $tpl->fetch($template_path.'user_profile.tpl.php');

$contentContainer = array(
    array(
        "title" => $title,
        "content" => $id == 1 ? $admin_link.$content_info : $content_info,
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