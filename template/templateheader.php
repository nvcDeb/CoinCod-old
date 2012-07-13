<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link href="../template/style.css" rel="stylesheet" type="text/css"  />
	<link rel="shortcut icon" href="../template/template_image/favicon.ico" />
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script>
// This adds 'placeholder' to the items listed in the jQuery .support object. 
jQuery(function() {
   jQuery.support.placeholder = false;
   test = document.createElement('input');
   if('placeholder' in test) jQuery.support.placeholder = true;
});
// This adds placeholder support to browsers that wouldn't otherwise support it. 
$(function() {
   if(!$.support.placeholder) { 
      var active = document.activeElement;
      $(':text').focus(function () {
         if ($(this).attr('placeholder') != '' && $(this).val() == $(this).attr('placeholder')) {
            $(this).val('').removeClass('hasPlaceholder');
         }
      }).blur(function () {
         if ($(this).attr('placeholder') != '' && ($(this).val() == '' || $(this).val() == $(this).attr('placeholder'))) {
            $(this).val($(this).attr('placeholder')).addClass('hasPlaceholder');
         }
      });
      $(':text').blur();
      $(active).focus();
      $('form:eq(0)').submit(function () {
         $(':text.hasPlaceholder').val('');
      });
   }
});
</script>

</head>

<body>
<header id="header">
	<div id="header_content">
    	<div class="container">
           	<div class="login">
				<?php
				include("$_SERVER[DOCUMENT_ROOT]/CoinCod/Login_Form/check_login.php");
				?>
            </div>  <!--end div login-->	
	
			<div id="search">
				<form action="http://<?php echo $_SERVER['HTTP_HOST']; ?>/CoinCod/Search" enctype="multipart/form-data" name="searchForm" id="myForm" method="GET">
         			<input type="text" class="search_input" name="search" placeholder="Enter Search..." value="<?php echo isset($searchTerms)?htmlspecialchars($searchTerms):''; ?>" />
      			</form>
			</div>  <!--end div search-->
                
			<div id="logo">
				<a href="http://localhost/CoinCod"></a>
			</div>  <!--end div logo-->	
		
			<nav class="menu">
				<table cellspacing="0">
				<tbody>
					<tr>
						<td>
							<ul class="top_nav">
								<li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/CoinCod">Home</a>
                                </li>
								<li>
									<a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/CoinCod/How_It_Works">How It Works</a>
								</li>
								<li>
									<a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/CoinCod/Buy_Tokens">Buy Tokens</a>
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