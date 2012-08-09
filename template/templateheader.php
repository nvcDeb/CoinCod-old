<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link href="../template/style.css" rel="stylesheet" type="text/css"  />
	<link rel="shortcut icon" href="../template/template_image/favicon.ico" />
	
<!--[if lte IE 9]>
	<link href="template/style_ie.css" rel="stylesheet" type="text/css"  />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script src="template/placeholder.js"></script>
	<script>
		$(function(){
			$("[placeholder]").placeholder();
		})
	</script>
<![endif]-->

<?php
$SERVER = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$HOST_NAME = $_SERVER['HTTP_HOST'];
$PATH = "/CoinCod/";
$SITE = $SERVER.$HOST_NAME.$PATH;
?>

</head>

<body>
<header id="header">
	<div id="header_content">
    	<div class="container">
           	<div class="login">
				<?php
				include $_SERVER['DOCUMENT_ROOT'].$PATH.'Login_Form/check_login.php';
				?>
            </div>  <!--end div login-->	
	
			<div id="search">
				<form action="<?php echo $SITE;?>Search" enctype="multipart/form-data" name="searchForm" id="myForm" method="GET">
         			<input type="text" class="search_input" name="search" placeholder="Enter Search..." value="<?php echo isset($searchTerms)?htmlspecialchars($searchTerms):''; ?>" />
      			</form>
			</div>  <!--end div search-->
                
			<div id="logo">
				<a href="<?php echo $SITE;?>"></a>
			</div>  <!--end div logo-->	
		
			<nav class="menu">
				<table cellspacing="0">
				<tbody>
					<tr>
						<td>
							<ul class="top_nav">
								<li><a href="<?php echo $SITE;?>">Home</a>
                                </li>
								<li>
									<a href="<?php echo $SITE;?>How_It_Works">How It Works</a>
								</li>
								<li>
									<a href="<?php echo $SITE;?>Buy_Tokens">Buy Tokens</a>
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
