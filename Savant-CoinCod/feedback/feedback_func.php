<?php
	$emails = stripslashes($_POST['form_email']);
	$names = mysql_escape_string($_POST['form_name']);
	$subject = mysql_escape_string($_POST['form_subject']);
	$comments = mysql_escape_string($_POST['form_comments']);
	
	$error = NULL;
	if(empty($names)){
		$error .= "<li>Name is required";
	}
	if(empty($subject)){
		$error .= "<li>Subject is required";
	}
	if(empty($comments)){
		$error .= "<li>Comments is required";
	}
	if(empty($comments)){
		$error .= "<li>Comments is required";
	}
	
	if(!empty($error)){
		$echo_err = "<div style='text-align:left;color:#d50000;'><ul>".$error."</ul></div>";
	}else{
		$to = "contact@nexvend.com";
		$from = "$emails";
		$subject = "Feedback";
		$message = '<html>
					<body>
					'.$comments.'
					</body>
					</html>';
		$headers = "From: $from\r\n";
		$headers .= "Content-type: text/html\r\n";
		$headers .= "Bcc: wilson@nexvend.com";
		$to = "$to";
		$mail = mail($to, $subject, $message, $headers);

		$toreply = "$emails";
		$fromreply = "contact@nexvend.com";
		$subjectreply = "Thank You Feedback";
		$messagereply ='<html>
						<body>
						Dear ' . $names . ',
						<br/><br/>
						CoinCod will like to inform you that we have received your feedback! Here at CoinCod, we value all of our customers thus we evaluate every customers feedback seriously. Therefore, it might take some time for us to process all the feedbacks we received. We will get back to you soon. Thank you for your patience.
						<br/><br/>
						Best Regards,<br/>
						CoinCod Management Team
						</body>
						</html>';
		$headerreply = "From: $fromreply\r\n";
		$headerreply .= "Content-type: text/html\r\n";
		$headerreply .= "Bcc: wilson@nexvend.com";
		$mail = mail($toreply, $subjectreply, $messagereply, $headerreply);


			
		if($mail != 1){
			$err_mailed = "Mailer Error (CS): Failed comment. Please try to resend again!";
		}else{
			$err_mailed = "Thank you for comment";
		}
	}

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
        "content" => $error.$err_mailed,
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
?>