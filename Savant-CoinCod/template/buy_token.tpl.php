<?php
	include_once 'functions.php';
	require $this->template_path.'config.php';
?>
<div class="package_value">
	<div class="ul">
		<ul class="token_nav">
			<h4>Token Packages</h4>
			<li>
				<div class="token_value">50 tokens</div>
			</li>
			<li>
				<div class="token_value">100 tokens</div>
			</li>
			<li>
				<div class="token_value">200 tokens</div>
			</li>
			<li>
				<div class="token_value">500 tokens (5% discount)</div>
			</li>
			<li>
				<div class="token_value">1000 tokens (10% discount)</div>
			</li>
			<li>
				<div class="token_value">2500 tokens (20% discount)</div>
			</li>
			<li>
				<div class="token_value">5000 tokens (25% discount)</div>
			</li>
		</ul>     
		<ul class="token_nav">
			<h4>Paypal (RM)</h4>
			<?php 
				$array = array("D83KWGJ6FX9YA"=> 15, "X24J6YZZDUN48"=> 30,"BXDZPNG8VAQCA"=>60,"QBD5BC7F7S5YW"=>"142.50","QRQHHTB6L7AK2"=>270,"VGJA9EG9CZ2QJ"=>600,"AZR4JZBCWDX2L"=>1125);
				foreach ( $array as $i => $j) {
					if(isset($_SESSION['user_id'])) {
						echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post">';
					} else {
						echo '<form action="#" method="post">';
					}
						echo '<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="'.$i.'">        
							<input type="image" src="http://coincod.com/template/price_button/'.$j.'.png" width="104" height="34" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
							</form>
						';
				} 
			?>
		</ul>  	
	</div>
</div>