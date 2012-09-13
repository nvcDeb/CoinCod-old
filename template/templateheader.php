<?php
	include "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="<?php echo $PREFIX; ?>/template/template_image/favicon.ico" />
	<link href="<?php echo $PREFIX; ?>/template/style.css" rel="stylesheet" type="text/css"  />
	<!--[if lt IE 10]>
		<link href="<?php echo $PREFIX; ?>/template/style_ie.css" rel="stylesheet" type="text/css"  />
	<![endif]-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>	
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
<header id="header">
	<div id="header_content">
    	<div class="container">
           	<div class="login">
				<?php
				include "../Login_Form/check_login.php";
				?>
            </div>  <!--end div login-->	
	
			<div id="search">
				<form action="<?php echo $PREFIX; ?>/Search" enctype="multipart/form-data" name="searchForm" id="myForm" method="GET">
         			<input type="text" class="search_input" name="search" placeholder="Enter Search..." value="<?php echo isset($searchTerms)?htmlspecialchars($searchTerms):''; ?>" />
      			</form>
			</div>  <!--end div search-->
                
			<div id="logo">
				<a href="/"></a>
			</div>  <!--end div logo-->	
		
			<nav class="menu">
				<table cellspacing="0">
				<tbody>
					<tr>
						<td>
							<ul class="top_nav">
								<li><a href="<?php echo $PREFIX; ?>">Home</a>
                                </li>
								<li>
									<a href="<?php echo $PREFIX; ?>/How_It_Works">How It Works</a>
								</li>
								<li>
									<a href="<?php echo $PREFIX; ?>/Buy_Tokens">Buy Tokens</a>
								</li>
								<!--<li>
									<a href="Winners">Winners</a>			
								</li>-->							
							</ul>
						</td>
					</tr>
				</tbody>
        		</table> 						
			</nav>  <!--end div menu-->	
            
		</div>  <!--end div header_content-->
	</div>  <!--end div container-->
</header>  <!--end div header-->
</body>
</html>
