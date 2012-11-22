<?php
	include_once 'functions.php';
	require $this->template_path.'config.php';
	
	$id = $_REQUEST['id'];
	$id = ereg_replace("[^0-9]", "", $id);
	$result = activationuser($id);
	
?>
<div style="color:red;">
		<?php echo $result;?>
	</div>
