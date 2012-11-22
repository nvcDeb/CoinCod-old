<?php
	include_once 'functions.php';
	require $this->template_path.'config.php';
?>
<div id="wrapper">
    <section id="content_container">
		<section class="site_body">
		<?php
			$top_bidder = getTopBidder();		
			if (isset($_GET['search'])) {
				$search_terms = trim($_GET['search']);
				if (strlen($search_terms) < 3) { 
					echo "Search terms must be longer than 3 characters.";
      			} else {
					$totalproduct = searchTotalProduct($search_terms);
					$searchproduct = getProductList($search_terms);
					
					if($totalproduct>0) {
						for($i=0;$i<$totalproduct;$i++) {
							$productID=$searchproduct[$i]["pid"];
							$Brand=$searchproduct[$i]["brand"];
							$Model=$searchproduct[$i]["model"];
							$Marketprice=$searchproduct[$i]["mprice"];
							$Auctionprice=$searchproduct[$i]["aprice"];
			
							$auctionend=$searchproduct[$i]["aend"];
							$auctiontime = $auctionend - time();
					
							$token_needed=$searchproduct[$i]["bid"];
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
		?>
							<script>
								Timer[<?=$productID?>] = <?=$auctiontime?>;
					  		</script>
			
							<ul class="auction_box">
       		  					<li>
				  					<form id="myForm" name="postlink" action="<?=$PREFIX?>/product/product_description.php" method="post">
				  	  					<input type="hidden" name="pid" value='<?=$productID?>' />
				 	   					<input name="link"  class="button_title" type="submit" value="<?=$Brand.$Model?>" />	
									</form>
										
									<form id="myForm" name="postlink" action="<?=$PREFIX?>/product/product_description.php" method="post">
					  					<input type="hidden" name="pid" value='<?=$productID?>' />
				  	    				<input type="image" src="<?=$PREFIX?>/product/product_image/<?=$productID?>.jpg" width="210" height="150" input name="link"  class="button_image"  type="submit" value="<?=$Brand.$Model?>" />				  	
									</form>  
										
									<div class="bid_current">
										Current Auction Price:<br/>
										<div class="bid_current_color">RM <?=$Auctionprice?></div>
									</div>
				
	                  				<div class="bid_box">
				   						<div id="bid_timer_<?=$productID?>" class="bid_timer" end_time="">
									</div>
                					<!--<div id="bid_price_1" class="bid_price">'.$Marketprice.'</div>';-->
									<?php if(!isset($_SESSION['user_id'])) { ?>
										<form action="<?=$PREFIX?>/login" method="post">
											<div class="bid_button">
												<input name="login"  class="button" type="submit" value="LOGIN" />
											</div>
										</form>
									<?php } else { 
										$userid = $_SESSION['user_id'];
										if($userid == 1 && $auctiontime >0) { ?>
											<form action="<?=$PREFIX?>/admin_site/product_info.php" method="post">
												<input type="hidden" name="uid" value='<?=$userid?>' />
												<input type="hidden" name="pid" value='<?=$pro_id?>' />
												<div class="bid_button">
													<input name="bid<?=$pro_id?>"  class="button" type="submit" value="Edit"/>
												</div>
											</form>
										<?php } else if($userid == 1 && $auctiontime <0) { ?>
											<form action="<?=$PREFIX?>/admin_site/product_info.php" method="post">
												<input type="hidden" name="uid" value='<?=$userid?>' />
												<input type="hidden" name="pid" value='<?=$pro_id?>' />
												<div class="bid_button">
													<input name="bid<?=$pro_id?>"  class="button" type="submit" value="Edit"/>
													<input name="endbid<?=$pro_id?>" class="button" type="submit" value="End Bid" />
												</div>
											</form>
										<?php } else if($userid > 0 && $auctiontime >0) { ?>
											<form action="<?=$PREFIX?>/Function/updatetimer.php" method="post">
												<input type="hidden" name="uid" value='.$userid.' />
												<input type="hidden" name="pid" value='.$productID.' />
												<div class="bid_button">
													<input name="bid<?=$pro_id?>"  class="button" type="submit" value="<?=$tokenneed?> Token to BID" />
												</div>
											</form>
										<?php } else if($userid > 0 && $auctiontime <0) { ?>
											<div class="bid_button">
												<input name="endbid<?=$pro_id?>" class="button" type="submit" value="Bid Ended" />
											</div>
										<?php }
									} ?>
					
                   					<span class="bid_spot">Highest Bidder</br><?=$top_bidder?> </br>
										<!--This is the spot for you to put the bid function<div>Bid<div>-->
                    				</span>
									
									<span id="auto_bidder">
										Auto Bidder</br>
									</span>			
          	  					</li>    
                  			</ul>
				  		<?php }
					} else {
						echo "no data";
					}
     			}
			} ?>
		</section>  <!--end div site_body-->
	</section>  <!--end div content_container-->
</div>  <!--wrapper-->