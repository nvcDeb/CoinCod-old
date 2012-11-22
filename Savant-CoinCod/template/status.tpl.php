<?php
	include_once 'functions.php';
	require $this->template_path.'config.php';
?>
<div class="status_box">
	<div class="status_left">
		<div class="left">How is CoinCod doing today?
			<?=date("d-F-Y")?>
		</div>
	</div>
	<div class="status_right">
		<div class="right">
			<?=get_sitestatus()?>
		</div>
	</div>
</div>