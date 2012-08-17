<?php
	include "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Activation</title>
</head>

<body>
<div id="wrapper">
	<?php
		include "../template/templateheader.php";
	?>
  <section id="content_container">
    <section class="auction_container">
    <?php
		$id = $_REQUEST['id'];
		$id = ereg_replace("[^0-9]", "", $id);
		if (!$id) 
		{	
			echo "</br>Missing Data";
		}
		$sql = mysql_query("UPDATE user_account SET Activation='1' WHERE user_id='$id'"); 

		$update_activation = mysql_query("SELECT * FROM user_account WHERE user_id='$id' AND Activation='1'"); 
		$updateactivation = mysql_num_rows($update_activation); 
		if($updateactivation == 0)
		{ 
			echo "</br>Caution! This account cannot be activate.";
		} 
		elseif ($updateactivation > 0) 
		{
			echo "</br>Congratulations! This account is succesfully activated."; 
		} 
	?>
    </section>
  </section>
</div>
    <?php
		include "../template/templatefooter.html";
	?>
</body>
</html>