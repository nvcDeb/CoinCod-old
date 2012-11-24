<?php
	require $this->template_path.'config.php';
?>
<html>
<head>
    <title><?php echo $this->eprint($this->title); ?></title>
	<meta charset="utf-8" />
    <meta name="description" content="<?php echo $this->eprint($this->meta_description); ?>" />
	<link href="<?php $this ->eprint($this->template_path)?>style.css" rel="stylesheet" type="text/css" />
	<!--[if lte IE 9]>
	<link href="<?php $this ->eprint($this->template_path)?>style_ie.css" rel="stylesheet" type="text/css"  />
	<![endif]-->
	<link rel="shortcut icon" href="template/template_image/favicon.ico" />
	<!--validation-->
	<script type="text/javascript" src="<?php echo $PREFIX; ?>/libs/validation/livevalidation_standalone.compressed.js"></script>
    <link rel="stylesheet" href="<?php echo $PREFIX; ?>/libs/validation/css/validation.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>	    
<script type="text/javascript">  
  
window.setTimeout("Tick()", 1000);  
var Timer = {};
  
function Tick() {
    UpdateTimer();
    window.setTimeout("Tick()", 1000);
}
function UpdateTimer() {
	var eta;
	for ( var i in Timer ) {
		eta = Timer[i];
		//eta = "00:" + LeadingZero(Timer[i]);
		document.getElementById("bid_timer_" + i).innerHTML = ( (eta <= 0) ? 0 : eta );
		Timer[i] -= 1;
	}
}
function LeadingZero(Time) {  
    return (Time < 10) ? "0" + Time : + Time;  
}

</script>    

<script >
$(document).ready(function(){

	// hide #back-top first
	$("#back-top").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});
</script> 
</head>

<body>
<div id="wrapper">
	<header id="header">
		<div id="header_content">
			<div class="container">
				<div class="login_head">
					<?php echo $this->login; ?>
				</div> <!--end div login_head-->
						
				<div id="logo">
					<a href="<?php echo $PREFIX; ?>"></a>
				</div>  <!--end div logo-->
						
				<nav class="menu">
					<table cellspacing="0">
						<tbody>
							<tr>
								<td>
									<ul class="top_nav logged_out">
										<li>
											<a href="<?php echo $PREFIX; ?>">Home</a>
										</li>
										<li>
											<a href="<?php echo $PREFIX; ?>/how_it_works">How It Works</a>
										</li>
										<li>
											<a href="<?php echo $PREFIX; ?>/buy_tokens">Buy Tokens</a>
										</li>
										<!--<li>
											<a href="header/winners">Winners</a>			
										</li>-->					
									</ul>
								</td>
							</tr>
						</tbody>
					</table> 		
				</nav>  <!--end div menu-->

				<div id="search"> 
					<form action="<?php echo $PREFIX; ?>/search" enctype="multipart/form-data" name="searchForm" id="myForm" method="GET">
						<input type="text" class="search_input" name="search" placeholder="Enter Search..." value="<?php echo isset($searchTerms)?htmlspecialchars($searchTerms):''; ?>" />
					</form>
				</div>  <!--end div search-->
			</div> <!--end div container-->
		</div> <!--end div header_content-->
	</header> <!--end header-->