<?php
	include_once 'functions.php';
	require $this->template_path.'config.php';
?>
<div id="wrapper">
    <?php
		
		$productId = mysql_real_escape_string($_POST['pid']);
		$pro_details=getProductDetails($productId);
		$product_brand=$pro_details["brand"];
		$product_model=$pro_details["model"];
		$product_marprice=$pro_details["mprice"];
		$product_aucprice=$pro_details["aprice"];
		$product_description=$pro_details["description"];
		
		$product_time_end = $pro_details["aend"];
		$product_time = $product_time_end - time();
		
		$token_needed=$pro_details["bid"];
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
    <title><?php echo $product_brand; echo $product_model; ?></title>
    <section id="content_container">
		<section class="auction_container">
			<div id="product">
				<div class="name">
					<?php echo $product_brand;	echo " ";	echo $product_model;	?> 
				</div>
			</div>
	
			<div id="description">
				<table width="900" border="0">
					<tr>
						<td width="412">
							<div class="product_image"> 
								<img alt="" src="<?=$PREFIX?>/product/product_image/<?=$productId?>.jpg" width="390" height="275" border="0"/>
							</div>
						</td>
						<td width="100">&nbsp;</td>
						<td width="432" rowspan="3">
							<div class="product">
								<div class="description">
									<?php echo $product_description;	?>
								</div>
							</div>
						</td>
					</tr>
					
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>
							<div class="desc_bid_box">
								<div class="price">					
									<div class="current_bid_price">
										<div class="price_title">
											Current Price: 
										</div> 
										RM <?php echo $product_aucprice;	?>
									</div>
					
									<div class="market_price">
										<div class="price_title">
											Retail Price: 
										</div> 
										RM <?php echo $product_marprice;	?>
									</div>
								</div>
				
								<script>
									Timer[<?=$productId?>] =<?=$product_time?>;
								</script>
				
								<div id="bid_timer_<?=$productId?>" class="timer" end_time="">
								</div>
                
								<div class="product_bid_button">
									<?php if(!isset($_SESSION['user_id'])) { ?>
										<form action="<?=$PREFIX?>/login" method="post">
											<div class="bid_button">
												<input name="login"  class="button" type="submit" value="LOGIN" />
											</div>
										</form>
									<?php } else { 
										$userid = $_SESSION['user_id'];
										if($userid == 1 && $product_time >0) { ?>
											<form action="<?=$PREFIX?>/admin_site/product_info.php" method="post">
												<input type="hidden" name="uid" value='<?=$userid?>' />
												<input type="hidden" name="pid" value='<?=$productId?>' />
												<div class="bid_button">
													<input name="bid<?=$productId?>"  class="button" type="submit" value="Edit"/>
												</div>
											</form>
										<?php } else if($userid == 1 && $product_time <0) { ?>
											<form action="<?=$PREFIX?>/admin_site/product_info.php" method="post">
												<input type="hidden" name="uid" value='<?=$userid?>' />
												<input type="hidden" name="pid" value='<?=$productId?>' />
												<div class="bid_button">
													<input name="bid<?=$productId?>"  class="button" type="submit" value="Edit"/>
													<input name="endbid<?=$productId?>" class="button" type="submit" value="End Bid" />
												</div>
											</form>
										<?php } else if($userid > 0 && $product_time >0) { ?>
											<form action="<?=$PREFIX?>/Function/updatetimer.php" method="post">
												<input type="hidden" name="uid" value='<?=$userid?>' />
												<input type="hidden" name="pid" value='<?=$productId?>' />
												<div class="bid_button">
													<input name="bid<?=$productId?>"  class="button" type="submit" value="<?=$tokenneed?> Token to BID" />
												</div>
											</form>
										<?php } else if($userid > 0 && $product_time <0) { ?>
											<div  class="bid_button">
												<input name="endbid<?=$productId?>" class="button" type="submit" value="Bid Ended " />
											</div>
										<?php }
									} ?>
								</div>
				
								<div class="highest_bidder">
									<div id="top_highest_bidder">Highest Bidders :</div>
									<?php 
										$bidder = getBidderList();
										for($i=0;$i<5;$i++) {
											$highest_user=$bidder[$i]['username'];
											$highest_time=$bidder[$i]["time"];
											echo $highest_user;
											echo "&nbsp;";
											echo $highest_time;
											echo "";
										}
									?>
								</div>
							</div>
						</td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</div>
    	</section>
	</section>
</div><!--wrapper-->