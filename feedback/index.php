<?php
	session_start();
	include "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Feedback</title>
	<link href="<?php echo $PREFIX; ?>/template/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo $PREFIX; ?>/validation/css/validation.css" type="text/css" />
  	<script type="text/javascript" src="<?php echo $PREFIX; ?>/validation/livevalidation_standalone.compressed.js"></script>
</head>

<body>
<div id="wrapper">
		<?php
	  		include "../template/templateheader.php";
		?>
	<section id="content_container">
		<h5>Feedback</h5>
    	<section class="auction_container">	
		<div id="feedback">
		<ul>
			<div class="column_first">
        <p>Feel free to email us at <a href="mailto:support@coincod.com">support@coincod.com</a></p>
        <form accept-charset="UTF-8" action="/contact" class="edit_user" id="edit_user_1809494" method="post"><div style="margin:0;padding:0;display:inline"><input name="_method" value="put" type="hidden"></div>

  <dl class="form">
    <dt><label for="form_name">Name</label></dt>
    <dd><input id="form_name" name="form[name]" value="" type="text"></dd></dl>

    <dl class="form">
    <dt><label for="form_email">Email</label></dt>
    <dd><input id="form_email" name="form[email]" required="true" value="" type="text"></dd></dl>


    <dl class="form">
    <dt><label for="form_subject">Subject</label></dt>
    <dd><input id="form_subject" name="form[subject]" required="true" type="text"></dd></dl>


    <input name="form[last_repo]" value="" type="hidden">
    <input name="form[last_repo_at]" value="" type="hidden">


  <dl class="form">
    <dt><label for="form_comments">Questions / Comments</label></dt>
    <dd><textarea id="form_comments" name="form[comments]" placeholder="Please write your feedback here. We will reply your feedback as soon as possible." required="true"></textarea></dd></dl>

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
        <a href="mailto:security@coincod.com">security@coincod.com
        </a>

      If you have any special request <strong>just shoot CoinCod an email</strong>, we are always available.

      <img alt="fisheart" class="fisheart" src="<?php echo $PREFIX; ?>/template/template_image/fisheart.png">

</section>
</ul>
	</div>
		</section>
	</section>
		
</div>
		<?php
	  		include "../template/templatefooter.html";
		?>
</body>
</html>