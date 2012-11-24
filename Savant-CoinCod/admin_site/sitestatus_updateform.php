<?php
// Load the Savant3 class file and create an instance.
require_once '../Savant3.php';
session_start();
// initialize template engine
$tpl = new Savant3();
$id = $_SESSION['user_id'];
$email = $_SESSION['email'];


// set search path for templates
$tpl->addPath('template', '../template');

// Create a title.
$template_path = "../template/";
$resource_path = "../";
$title = "Site Status Update";
$meta_description = "Welcome to CoinCod - a unique auction system built to draw everyone closer to their dream products.";
$admin_link ="<div id='admin_menu'>
				<a href='../user_profile/?id=$id'>Profile</a>&ndash;
        		<a href='../admin_site/product_form.php'>Add Product </a>&ndash;
				<a href='../admin_site/user_list.php'>User Listing</a>&ndash;
				<a href='../admin_site/sitestatus_updateform.php'>Site Status</a>
			</div></br>";
$status_update = '<form action="status_updatefunc.php" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
			<td>
				<select id="status" name="status" size="1">
					<option value="Well as usual running like charm.">Well as usual running like charm.</option>
					<option value="Website Maintenance! Temporary Down!">Website Maintenance! Temporary Down!</option>
				</select>
			</td>
			<input type="submit" name="button" class="form_button" value="Update" />
		</form>';

$contentContainer = array(
    array(
        "title" => $title,
        "content" => $id == 1 ? $admin_link.$status_update : $status_update,
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