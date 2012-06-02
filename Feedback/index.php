<?php
	session_start();
	  include "../server.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Feedback</title>
	<link href="../template/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../validation/css/validation.css" type="text/css" />
  	<script type="text/javascript" src="../validation/livevalidation_standalone.compressed.js"></script>
</head>

<body>
<div id="wrapper">
		<?php
	  		include "../template/templateheader.php";
		?>
	<div id="content_container">
    	<div class="auction_container">	
			<div id="feedback"><h1><img src="../template/template_image/header/feedback.png" border="0"></h1><br/>
			<form action="feedback_func.php" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
			<tr>
				<td>
					Name:
				</td>
				<td>
					<input type="text" name="names" value="" class="text" id="names" size="33" maxlength="50" tabindex="2"></br>
                    <script type="text/javascript">
		    			var names = new LiveValidation('names');
		    			names.add(Validate.Presence);
						names.add(Validate.Char, { onlyInteger: true } );
		  			</script>
				</td>
			</tr>
			<br/>
			
			<tr>
				<td width="33%">
					Email : 
				</td>
				<td width="100%">
					<input type="text" name="emails" value="" class="text" id="emails" size="33" maxlength="50" tabindex="10"></br>
                    <script type="text/javascript">
						var emails = new LiveValidation('emails');
						emails.add(Validate.Presence);
						emails.add(Validate.Email, {failureMessage: 'Email Not Valid!'});
					</script>
				</td>
			</tr>
            <br/>
			
			<tr>
            	<td width="33%">
					Comment : </br>
				</td>
            	<td width="100%">
            		<textarea id="comment" name="comment" rows="10" cols="95"></textarea></br>
					<script type="text/javascript">
		    			var comment = new LiveValidation('comment');
		    			comment.add(Validate.Presence);
		  			</script>
                 </td>
            </tr>
			<br/>
            <input type="submit" name="button" class="form_button" value="Submit" />
            </form>
			</div>
            </br>
		</div>
	</div>
		
</div>
		<?php
	  		include "../template/templatefooter.html";
		?>
</body>
</html>