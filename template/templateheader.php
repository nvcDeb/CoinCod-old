<!DOCTYPE html>
<html>
<head>
	<link href="../template/style.css" rel="stylesheet" type="text/css"  />
	<link rel="shortcut icon" href="../template/template_image/favicon.ico" />
</head>

<body>
<header id="header">
	<div id="header_content">
    	<div class="container">
           	<div class="login">
				<?php

				include(include "/Login_Form/check_login.php");
				?>
            </div>  <!--end div login-->	
	
			<div id="search">
				<form action="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Search" enctype="multipart/form-data" name="searchForm" id="myForm" method="GET">
         			<input type="text" class="search_input" name="search" placeholder="Enter Search..." value="<?php echo isset($searchTerms)?htmlspecialchars($searchTerms):''; ?>" />
      			</form>
			</div>  <!--end div search-->
                
			<div id="logo">
				<a href="./"></a>
			</div>  <!--end div logo-->	
		
			<nav class="menu">
				<table cellspacing="0">
				<tbody>
					<tr>
						<td>
							<ul class="top_nav">
								<li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>">Home</a>
                                </li>
								<li>
									<a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/How_It_Works">How It Works</a>
								</li>
								<li>
									<a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Buy_Tokens">Buy Tokens</a>
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
