<?php
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	include "server.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>CoinCod</title>
	<link href="template/style.css" rel="stylesheet" type="text/css" />

	<!--[if lt IE 10]>
	<link href="template/style_ie.css" rel="stylesheet" type="text/css"  />
	<![endif]-->
	
    <link rel="shortcut icon" href="template/template_image/favicon.ico" />
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script src="template/placeholder.js"></script>
<script>
$(function(){
	$("[placeholder]").placeholder();
})
</script>


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
    
    
</head>

<body>
<!--header-->
<div id="wrapper">
	<header id="header">
		<div id="header_content">
			<div class="container">
				<div class="login_head">
				<?php
					if (isset($_SESSION['user_id'])) 
					{
						 $now = time(); 
						if($now > $_SESSION['expire'])
						{
							session_destroy();
							echo "<script language='javascript'>";
							echo "window.location='index.php';";
							echo "alert('Timeout!!!Please login to continue browsing the site');";
							echo "</script>";
						}
						else
						{ 
							$_SESSION['start_reset'] = time();
							$_SESSION['expire'] = $_SESSION['start_reset'] + (30 * 60) ;
							include "server.php";
							$userid = $_SESSION['user_id'];
							$username = $_SESSION['user_username'];
							
							$user=mysql_query("SELECT * FROM user_account WHERE user_id='$userid'");
							$get=mysql_fetch_array($user);
							$token=$get["Token"];
							$gravatar_image=$get["Email"];
							$default = "http://auction12345.site50.net/template/template_image/favicon.ico";
							$size = 40;

							$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $gravatar_image ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
												
							echo '
							<div id="main_after_log">
							<div id="after_log_in">
							<div class="user_name">
							<img src="'.$grav_url.'" alt="" />
								<a href="User_Profile/?id=' . $userid . '">' . $username . '
								</a>
							</div>
							<div id="logout">
								<a href="Logout">Log Out</a>
						
							</div>
							<div class="token_left">
								<img src="template/template_image/header/token_left.png" border="0" width="30%"> '.$token.'
							</div>
							</div></div>';
						}
					} 
					else 
					{
						echo '
							<form action="Login_Form/" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
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
										<a href="Forgot_Password/">Forgot Password?</a>
									</td>
									<td class="login_label_field">
										<a href="Registration/">Sign Up</a>
									</td>
								</tr>                   
							</tbody>
							</table>
							</form>	';
					}
				?>
				</div>	<!--end div login-->
	
				<div id="search"> 
				<form action="Search" enctype="multipart/form-data" name="searchForm" id="myForm" method="GET">
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
								<ul class="top_nav logged_out">
									<li>
										<a href="./">Home</a>
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
				</nav>  <!--end div menu-->
			</div>  <!--end div container clearfix-->
		</div>  <!--end div true clearfix-->								
	</header><!--end div menu-->
        
  <div id="content_container">
    
	<section id="banner_image">
	<img src="template/template_image/banner.png" width="1015px" border="0">
	</section>
	
		<section class="site_body">
			<?php	
				$product_list=mysql_query("SELECT * FROM product_list");
					$productLIST=mysql_num_rows($product_list);
						if($productLIST>0)
							{	  
								while ($row = mysql_fetch_array($product_list))
								{
									$productID=$row["product_id"];
									$Brand=$row["Brand"];
									$Model=$row["Model"];
									$Marketprice=$row["market_price"];
									$Auctionprice=$row["auction_price"];
				
									$auctionend=$row["auction_end"];
									$auctiontime = $auctionend - time();
									
									$highest_bidder=mysql_query("SELECT * FROM product_log WHERE auction_price=(select max(auction_price) from product_log)");
									$highest=mysql_fetch_array($highest_bidder);
									$highest_user=$highest["Username"];
								
									$token_needed=$row["total_bid"];
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
													Current Auction Price:<div class="bid_current_color">RM '.$Auctionprice.'
													</div></div>
									
													<div class="bid_box">
										
													<div id="bid_timer_'.$productID.'" class="bid_timer" end_time="">
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
													echo '<form action="Login_Form/" method="post">
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
										
										echo'
													<div id="read_more">						
														<form id="myForm" name="postlink" action="Product/" method="post">
															<input type="hidden" name="pid" value='.$productID.' />
															<input name="link"  class="read_more" type="submit" value="Read More..." />	
														</form>
													</div>
										
											<span class="bid_spot">Highest Bidder'.$highest_user.' 
											<!--This is the spot for you to put the bid function<div>Bid<div>-->
											</span>
											<span id="auto_bidder"></span>
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
		</section>
	</div>  <!--end div content_container-->
</div>  <!--wrapper-->
<!--end header-->
			
<!--footer-->  
<footer id="footer_wrap">
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
				<a href="./"><img src="template/template_image/logo2.png" width="80px" border="0"></a>
			</div>  <!--end div logo_image-->	
	 		<div class="payment_image">
	 			<p/><a href="#"><img src="template/template_image/payment.png" width="700" border="0"></a>
	 		</div>  <!--end div payment_image-->
	 		<div class="copyright">
	 			<p>Copyright &copy; 2012 NexVend. All rights reserved.</p>
	 		</div>  <!--end div copyright-->
	 	</div>  <!--end div container clearfix-->	 
	</div>  <!--end div lower_footer_wrap-->         
</footer><!--footer_wrap--> 
<!--end footer-->    
</body>
</html>