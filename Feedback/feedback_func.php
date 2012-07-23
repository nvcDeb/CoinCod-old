<?php
	session_start();
	include "../server.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Feedback</title>
</head>
<body>
<div id="wrapper">
	<?php
		include "../template/templateheader.php";
	?>
    <section id="content_container">
		<section class="auction_container">
	<?php
include "../server.php";

$emails = mysql_real_escape_string($_POST['emails']);
$names = mysql_real_escape_string($_POST['names']);
$comment = mysql_real_escape_string($_POST['comment']);

$to = "hychan_89@hotmail.com";
$from = "$emails";
$subject = "Feedback";
$message = '<html>
			<body>
			'.$comment.'
			</body>
			</html>';
$headers = "From: $from\r\n";
$headers .= "Content-type: text/html\r\n";
$to = "$to";
mail($to, $subject, $message, $headers);

$toreply = "$emails";
$fromreply = "hychan_89@hotmail.com";
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
mail($toreply, $subjectreply, $messagereply, $headerreply);

echo "Thank you for comment";
?>
		</section><!--end div auction_container-->
	</section><!--end div content_container-->
</div><!--end div wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
	
	</body>
    </html>