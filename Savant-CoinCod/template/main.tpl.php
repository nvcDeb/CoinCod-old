<?php
	require $this->template_path.'config.php';
?>

<!-- BEGIN header -->
<?php echo $this->header; ?>
<!-- END header -->

<!-- BEGIN main -->
<section id="content_container">	
<?php 
	if ($_SERVER["PHP_SELF"] == $PATH."/index.php") { //load out in product template
		echo $this->product;
	} else if ($_SERVER["PHP_SELF"] == $PATH."/product/product_description.php") { //load out in product_description template
		echo $this->product_desc;
	} else if ($_SERVER["PHP_SELF"] == $PATH."/search/index.php") { //load out in search template
		echo $this->search;
	} else { 
		foreach ($this->content_container as $key => $val): 
		echo '<h5>'.$val['title'].'</h5>';
		echo '<article class="auction_container">';
			echo $val['content'];
			echo '<br>';
			echo $val['bottom_image'];
		echo '</article>';
		endforeach;
	}
?>

</section>
<!-- END main -->

<!-- BEGIN footer -->
<?php echo $this->footer; ?>
<!-- END footer -->		