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
$title = "Feedback";
$meta_description = "Welcome to CoinCod - a unique auction system built to draw everyone closer to their dream products.";

$contentContainer = array(
    array(
        "title" => $title,
        "content" => '<div id="feedback">
				<ul>
					<div class="column_first">
						<p>Feel free to email us at <a href="mailto:support@coincod.com">support@coincod.com</a></p>
						<form accept-charset="UTF-8" action="feedback_func.php" class="edit_user" id="edit_user_1809494" method="post">
						<div style="margin:0;padding:0;display:inline"><input name="_method" value="put" type="hidden"></div>

							<dl class="form">
								<dt><label for="form_name">Name</label></dt>
								<dd><input id="form_name" name="form_name" required="true" value="" type="text"></dd>
							</dl>

							<dl class="form">
								<dt><label for="form_email">Email</label></dt>
								<dd><input id="form_email" name="form_email" required="true" value="" type="text"></dd>
							</dl>

							<dl class="form">
								<dt><label for="form_subject">Subject</label></dt>
								<dd><input id="form_subject" name="form_subject" required="true" type="text"></dd>
							</dl>

							<input name="form[last_repo]" value="" type="hidden">
							<input name="form[last_repo_at]" value="" type="hidden">

							<dl class="form">
								<dt><label for="form_comments">Questions / Comments</label></dt>
								<dd><textarea id="form_comments" name="form_comments" placeholder="Please write your feedback here. We will reply your feedback as soon as possible." required="true"></textarea></dd>
							</dl>

							<div class="form-actions">
								<button type="submit" class="form_button"><span>Submit</span></button>
							</div>
						</form>
					</div>
				</ul>

				<ul>
					<section class="column_last">
						<h3>Why is your feedback crucial to CoinCod?</h3>
						<ul class="checklist">
							<li>We will able to challenge the status quo together by having a mutual understanding of each other.</li>
							<li>Pushing boundaries to create more upcoming innovative features</li>
							<li>Users like you will be able to have full control of your favorites.</li>
						</ul>
	  
						<h3>Reporting a security vulnerability?</h3>
						Please send to our email at
						<a href="mailto:security@coincod.com">security@coincod.com</a>
						If you have any special request <strong>just shoot CoinCod an email</strong>, we are always available.

						<img alt="fisheart" class="fisheart" src="../template/template_image/fisheart.png">
					</section>
				</ul>
			</div>',
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