<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link href="../template/style.css" rel="stylesheet" type="text/css"  />
	<link rel="shortcut icon" href="../template_image/favicon.ico" />
</head>

<body>
<div id="header">
	<div id="header_content">
    	<div class="container">
           	<div class="login">
				<?php
					include "../Login_Form/check_login.php";
				?>
            </div>  <!--end div login-->	
	
			<div id="search">
				<form action="../Search" enctype="multipart/form-data" name="searchForm" id="myForm" method="GET">
         			<input type="text" name="search" value="<?php echo isset($searchTerms)?htmlspecialchars($searchTerms):''; ?>" />
         			<input type="submit" name="submit" class="form_button" value="Search" />
      			</form>
				<!--<iframe style="width:300px; height:35px; margin:5px;" frameborder=0 allowtransparency=yes scrolling=no src="http://search.digitalpoint.com/iframe.php?site=www.google.com&y=1">
				</iframe>-->
                <?php include "../Search/search.php"; ?>
			</div>  <!--end div search-->
                
			<div id="logo">
				<a href="../../CoinCod"></a>
			</div>  <!--end div logo-->	
		
			<div class="menu">
				<table cellspacing="0">
				<tbody>
					<tr>
						<td>
							<ul class="top_nav">
								<li>
									<a href="../../CoinCod">Home</a>
                                </li>
								<li>
									<a href="../How_It_Works">How It Works</a>
								</li>
								<li>
									<a href="../Buy_Tokens">Buy Tokens</a>
								</li>
								<!--<li>
									<a href="Winners">Winners</a>			
								</li>-->							
							</ul>
						</td>
					</tr>
				</tbody>
        		</table> 						
			</div>  <!--end div menu-->	
            
		</div>  <!--end div header_content-->
	</div>  <!--end div container-->
</div>  <!--end div header-->
</br>
</body>
</html>
