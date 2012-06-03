<?php
	session_start();
	include "server.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>CoinCod</title>
	<link href="template/style.css" rel="stylesheet" type="text/css" />

	<!--[if lt IE 10]>
	<link href="template/style_ie.css" rel="stylesheet" type="text/css"  />
	<![endif]-->
	
    <link rel="shortcut icon" href="template/template_image/favicon.ico" />
    
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
		if(Timer[i] <= 0)
		{
			var eta=0;
			document.getElementById("bid_timer_" + i).innerHTML = eta;
			//return;
		}
		//eta = "00:" + LeadingZero(Timer[i]);
		document.getElementById("bid_timer_" + i).innerHTML = eta;
		Timer[i] -= 1;
	}
}
function LeadingZero(Time) {  
    return (Time < 10) ? "0" + Time : + Time;  
}

</script>      
    
    
</head>

<body>
<!--header-->
<div id="wrapper">
	<div id="header">
		<div id="header_content">
			<div class="container">
				<div class="login">
				<?php
					if (isset($_SESSION['user_id'])) 
					{
						include "server.php";
    					$userid = $_SESSION['user_id'];
    					$username = $_SESSION['user_username'];
							
						$user=mysql_query("SELECT * FROM user_account WHERE User_Id='$userid'");
						$get=mysql_fetch_array($user);
						$token=$get["token"];
				
						echo '
						<div id="after_log_in">
					<div class="user_name"><img src="template/template_image/header/welcome_back.png" border="0" width="45%">
						<a href="User_Profile/user_profile.php?id=' . $userid . '">' . $username . '
						</a>
					</div>
					<div class="logout">
						<a href="../CoinCod/Logout"><div class="logout_button">Log Out</div>
						</a>
					</div><div class="token_left">
						</br><img src="template/template_image/header/token_left.png" border="0" width="30%"> '.$token.'
					</div>
						</div>';
					} 
					else 
					{
						echo '</br>
							<form action="Login_Form/login_func.php" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
							<table cellspacing="0">
							<tbody>
								<tr>
									<td>
										<input type="text" class="inputtext" name="email" id="email" placeholder="Email" tabindex="1" />
									</td>
									<td>
										<input type="password" class="inputtext" name="password" id="password" placeholder="Password" tabindex="2">
									</td>
									<td>
										<button class="form_button" name="button" type="submit">LOGIN</button>
									</td>
								</tr>
								<tr>
									<td class="login_label_field">
										<a href="Forgot_Password/forgotpassword_form.php">Forgot Password?</a>
									</td>
									<td class="login_label_field">
										<a href="Registration/register_form.php">Sign Up</a>
									</td>
								</tr>                   
							</tbody>
							</table>
							</form>	';
					}
				?>
				</div>	<!--end div login-->
	
				<div id="search">
					<iframe style="width:300px; height:35px; margin:5px;" frameborder=0 allowtransparency=yes scrolling=no src="http://search.digitalpoint.com/iframe.php?site=www.google.com&y=1">
					</iframe>
				</div>	<!--end div search-->

				<div id="logo">
					<a href="../CoinCod"></a>
				</div>  <!--end div logo-->
	
				<div class="menu">
					<table cellspacing="0">
					<tbody>
						<tr>
							<td>
								<ul class="top_nav logged_out">
									<li>
										<a href="../CoinCod">Home</a>
                                   	</li>
									<li>
										<a href="How_It_Works">How It Works</a>
									</li>
									<li>
										<a href="Buy_Tokens">Buy Tokens</a>
									</li>
									<!--<li>
										<a href="header/winners">Winners</a>			
									</li>-->					
								</ul>
							</td>
						</tr>
					</tbody>
       				</table> 		
				</div>  <!--end div menu-->
			</div>  <!--end div container clearfix-->
		</div>  <!--end div true clearfix-->								
	</div><!--end div menu-->
	</br>
        
  <div id="content_container">
		<div class="site_body">
	<?php	
		$product_list=mysql_query("SELECT * FROM product_list");
		$productLIST=mysql_num_rows($product_list);
    	if($productLIST>0)
		{	  
			while ($row = mysql_fetch_array($product_list))
			{
				$productID=$row["Product_Id"];
				$Brand=$row["Brand"];
				$Model=$row["Model"];
				$Marketprice=$row["Market_Price"];
				$Auctionprice=$row["Auction_Price"];
			
				$auctionend=$row["Auction_End"];
				$auctiontime = $auctionend - time();
				
				$highest_bidder=mysql_query("SELECT * FROM product$productID WHERE Price=(select max(Price) from product$productID)");
				$highest=mysql_fetch_array($highest_bidder);
				$highest_user=$highest["User"];
			
				$token_needed=$row["Total_Bid"];
				if($token_needed <= 200)									{	$tokenneed = 1;		}
				if(($token_needed <= 400)	&&	($token_needed > 200))		{	$tokenneed = 2;		}
				if(($token_needed <= 600)	&&	($token_needed > 400))		{	$tokenneed = 3;		}
				if(($token_needed <= 800)	&&	($token_needed > 600))		{	$tokenneed = 4;		}
				if(($token_needed <= 1000)	&&	($token_needed > 800))		{	$tokenneed = 5;		}
				if(($token_needed <= 1200)	&&	($token_needed > 1000))		{	$tokenneed = 6;		}
				if(($token_needed <= 1400)	&&	($token_needed > 1200))		{	$tokenneed = 7;		}
				if(($token_needed <= 1600)	&&	($token_needed > 1400))		{	$tokenneed = 8;		}
				if(($token_needed <= 1800)	&&	($token_needed > 1600))		{	$tokenneed = 9;		}
				if(($token_needed <= 2000)	&&	($token_needed > 1800))		{	$tokenneed = 10;	}
				if(($token_needed <= 2200)	&&	($token_needed > 2000))		{	$tokenneed = 11;	}
				if(($token_needed <= 2400)	&&	($token_needed > 2200))		{	$tokenneed = 12;	}
				if(($token_needed <= 2600)	&&	($token_needed > 2400))		{	$tokenneed = 13;	}
				if(($token_needed <= 2800)	&&	($token_needed > 2600))		{	$tokenneed = 14;	}
				if(($token_needed <= 3000)	&&	($token_needed > 2800))		{	$tokenneed = 15;	}
				if(($token_needed <= 3200)	&&	($token_needed > 3000))		{	$tokenneed = 16;	}
				if(($token_needed <= 3400)	&&	($token_needed > 3200))		{	$tokenneed = 17;	}
				if(($token_needed <= 3600)	&&	($token_needed > 3400))		{	$tokenneed = 18;	}
				if(($token_needed <= 3800)	&&	($token_needed > 3600))		{	$tokenneed = 19;	}
				if(($token_needed <= 4000)	&&	($token_needed > 3800))		{	$tokenneed = 20;	}
				if($token_needed > 4000)									{	$tokenneed = 25;	}
						
				echo '<script>
						Timer['.$productID.'] = '.$auctiontime.';
					  </script>
			
						<ul id="auction_list_ul" class="auction_box">
        		  			<li>
				  				<div class="title">
				  					<form id="myForm" name="postlink" action="Product/product_description.php" method="post">
				  	  					<input type="hidden" name="pid" value='.$productID.' />
				 	   					<input name="link"  class="button_title" type="submit" value="'.$Brand.' '.$Model.'" />	
									</form>
				  				</div>
				
            	 				<div class="image">				  
					  				<form id="myForm" name="postlink" action="Product/product_description.php" method="post">
					  					<input type="hidden" name="pid" value='.$productID.' />
				  	    				<input type="image" src="Product/product_image/'.$productID.'.jpg" width="210" height="150" input name="link"  type="submit" value="'.$Brand.' '.$Model.'" />				  	
									</form>                	
                  				</div>
				
				  				<div class="bid_current">
								Current Auction Price:<br/><div class="bid_current_color">RM '.$Auctionprice.'
				  				</div></div>
				
                  				<div class="bid_box">
					
                				<div id="bid_timer_'.$productID.'" class="bid_timer" end_time="">
									'.$auctiontime.'
								</div>';
                					/*<div id="bid_price_1" class="bid_price">'.$Marketprice.'</div>';*/
					
							if($userid == 1 && $auctiontime >0)
							{
								echo '<form action="admin_site/product_info.php" method="post">
							  		  <input type="hidden" name="uid" value='.$userid.' />
							  		  <input type="hidden" name="pid" value='.$productID.' />
						 	  		  <div class="bid_button">
						      		  <input name="bid'.$productID.'"  class="button" type="submit" value="Edit"/>
						      		  </div></form>';
							}
							else if($userid == 1 && $auctiontime <0)
							{
								echo '<form action="admin_site/product_info.php" method="post">
							  		  <input type="hidden" name="uid" value='.$userid.' />
							  		  <input type="hidden" name="pid" value='.$productID.' />
						 	  		  <div class="bid_button">
						      		  <input name="bid'.$productID.'"  class="button" type="submit" value="Edit"/>
									  <input name="endbid'.$productID.'" class="button" type="submit" value="End Bid" />
						      		  </div></form>';
							}
							else if($userid == 0)
							{
								echo '<form action="Login_Form/loginpage.php" method="post">
						 	  		  <div class="bid_button">
						      		  <input name="login"  class="button" type="submit" value="LOGIN" />
						      		  </div></form>';
							}
							else if($userid > 0 && $auctiontime >0)
							{
								echo '<form action="Function/updatetimer.php" method="post">
							  		  <input type="hidden" name="uid" value='.$userid.' />
							  		  <input type="hidden" name="pid" value='.$productID.' />
						 	  		  <div class="bid_button">
						      		  <input name="bid'.$productID.'"  class="button" type="submit" value="'.$tokenneed.' Token to BID" />
						      		  </div></form>';
							}
							else if($userid > 0 && $auctiontime <0)
							{
								echo '<div class="bid_button">
						      		  <input name="endbid'.$productID.'" class="button" type="submit" value="Bid End " />
						      		  </div>';
							}
					
                    echo'<span class="bid_spot">Highest Bidder</br>'.$highest_user.' </br>
                    	<!--This is the spot for you to put the bid function<div>Bid<div>-->
                    	</span>
                  </div>
            	  </li>    
                  </ul>';	
				  
		}
	}
	else
	{
	 	echo "no data";
	}
?> 
</div>
  </div>  <!--end div content_container-->
</div>  <!--wrapper-->
<!--end header-->
			
<!--footer-->  
<div id="footer_wrap">
	<div class="upper_footer_wrap">
    	<div class="container" align="left">
			<div class="ul">
            	<ul class="footer_nav">
                	<h4>Coincod</h4>
                	<li>
                		<a href="About_Us">About Us</a>
                	</li>
                	<li>
                		<a href="FAQ">FAQ</a>
                	</li>
                	<li>
                		<a href="Career">Careers</a>
                	</li>
                	<li>
                		<a href="Feedback">Feedback</a>
                	</li>
                </ul>
                <ul class="footer_nav">
                	<h4>Other Features</h4>
                	<li>
                		<a href="Location">Location</a>
                	</li>
                	<li>
                		<a href="Graphics">Graphics</a>
                	</li>
                	<li>
                		<a href="Site_Status">Site Status</a>
                	</li>
                </ul> 
                <ul class="footer_nav">
                	<h4>Social Networks</h4>
                	<li>
                		<a href="">Like Us at Facebook</a>
                	</li>
                	<li>
                		<a href="">Follow Us at Twitter</a>
                	</li>
                	<li>
                		<a href="">Plus One at Google+</a>
                	</li>
					<li>
						<a href="">Follow Us at Pinterest</a>
					</li>
                	<li>
                		<a href="../auction_blog">Subscribe to Our Blog</a>
                	</li>
                </ul>
                <ul class="footer_nav">
                	<h4>Legal</h4>
                	<li>
                		<a href="Terms">Terms of Service</a>
                	</li>
                	<li>
                		<a href="Privacy">Privacy</a>
                	</li>
                	<li>
                		<a href="Security">Security</a>
                	</li>
                </ul>
			</div>  <!--endl div class ul-->
       </div>  <!--endl div container clearfix-->
     </div>  <!--endl div upper_footer_wrap-->

     
     <div id="lower_footer_wrap">
	 	<div class="container">
			<div class="logo_image">
				<a href="../CoinCod"><img src="template/template_image/logo2.png" width="80px" border="0"></a>
			</div>  <!--end div logo_image-->	
	 		<div class="payment_image">
	 			<p/><a href="http://www.netbuilder.com/"><img src="template/template_image/payment.png" width="700" border="0"></a>
	 		</div>  <!--end div payment_image-->
	 		<div class="copyright">
	 			<p>Copyright &copy; 2012 NexVend. All rights reserved.</p>
	 		</div>  <!--end div copyright-->
	 	</div>  <!--end div container clearfix-->	 
	</div>  <!--end div lower_footer_wrap-->         
</div><!--footer_wrap--> 
<!--end footer-->    
</body>
</html>
