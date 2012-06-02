<?php
	  	include "../server.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Activation</title>
</head>

<body>
<div id="wrapper">
	<?php
		include "../template/templateheader.php";
	?>
  <div id="content_container">
    <div class="auction_container">
    <?php
		$id = $_REQUEST['id'];
		$id = ereg_replace("[^0-9]", "", $id);
		if (!$id) 
		{	
			echo "</br>Missing Data";
		}
		$sql = mysql_query("UPDATE user_account SET Activation='1' WHERE User_Id='$id'"); 

		$update_activation = mysql_query("SELECT * FROM user_account WHERE User_Id='$id' AND Activation='1'"); 
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
    </div>
  </div>
</div>
    <?php
		include "../template/templatefooter.html";
	?>
</body>
</html>