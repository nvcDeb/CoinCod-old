<?php
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	include "../server.php";
?>
<!DOCTYPE html">
<html>
<head>
<meta charset=utf-8" />
<link href="../style.css" rel="stylesheet" type="text/css" />

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
<div id="wrapper">
    <?php
		include "../template/templateheader.php";
		
		$productId = mysql_real_escape_string($_POST['pid']);
			
		$get_product=mysql_query("SELECT * FROM product_list WHERE product_id='$productId'");
		$getproduct=mysql_fetch_array($get_product);
		$product_brand=$getproduct["Brand"];
		$product_model=$getproduct["Model"];
		$product_marprice=$getproduct["market_price"];
		$product_aucprice=$getproduct["auction_price"];
		$product_description=$getproduct["Description"];
		$product_time_end = $getproduct["auction_end"];
		$product_time = $product_time_end - time();
		
		$token_needed=$getproduct["total_bid"];
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
    <div id="content_container">
	<div class="auction_container">
	<div id="product">
		<div class="name">
				<?php echo $product_brand;	echo " ";	echo $product_model;	?> 
		</div>
	</div>
	
		<div id="description">
		  <table width="900" border="0">
            <tr>
              <td width="412"><div class="product_image"> <?php echo'<img alt="" src="../Product/product_image/'.$productId.'.jpg" width="390" height="275" border="0"/>'; ?>
			  </div></td>
              <td width="100">&nbsp;</td>
              <td width="432" rowspan="3">
			  
			  <div class="product">
                
				 <div class="description">
				<?php echo $product_description;	?>
				
				</div>
              </div></td>
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
				  <div class="price_title">Current Price: </div> RM
				  <?php echo $product_aucprice;	?>
				  </div>
					
				  <div class="market_price">
				  <div class="price_title">Retail Price: </div> RM
				  <?php echo $product_marprice;	?>
				  </div>
				  
                </div>
				
                <?php
                echo '<script>
						Timer['.$productId.'] = '.$product_time.';
					  </script>
				
                
                <div id="bid_timer_'.$productId.'" class="timer" end_time="">
				</div>';
				?>
                
                <div class="product_bid_button">
				<?php
               if($userid == 1 && $product_time >0)
				{
					echo '<form action="../admin_site/product_info.php" method="post">
				  		  <input type="hidden" name="uid" value='.$userid.' />
				  		  <input type="hidden" name="pid" value='.$productId.' />
				  		  <div class="bid_button">
				   		  <input name="bid'.$productId.'"  class="button" type="submit" value="Edit"/>
				   		  </div></form>';
				}
				else if($userid == 1 && $product_time <0)
				{
					echo '<form action="../admin_site/product_info.php" method="post">
				  		  <input type="hidden" name="uid" value='.$userid.' />
				  		  <input type="hidden" name="pid" value='.$productId.' />
				  		  <div class="bid_button">
				   		  <input name="bid'.$productId.'"  class="button" type="submit" value="Edit"/>
						  <input name="endbid'.$productId.'" class="button" type="submit" value="End Bid" />
				   		  </div></form>';
				}
				else if($userid == 0)
				{
					echo '<form action="../Login_Form/loginpage.php" method="post">
				  		  <div class="bid_button">
				   		  <input name="login"  class="button" type="submit" value="LOGIN" />
				   		  </div></form>';
				}
				else if($userid > 0 && $product_time >0)
				{
					echo '<form action="../Function/updatetimer.php" method="post">
				 		  <input type="hidden" name="uid" value='.$userid.' />
				  		  <input type="hidden" name="pid" value='.$productId.' />
				  		  <div class="bid_button">
				   		  <input name="bid'.$productId.'"  class="button" type="submit" value="'.$tokenneed.' Token to BID" />
				   		  </div></form>';
				}
				else if($userid > 0 && $product_time <0)
				{
					echo '<div  class="bid_button">
				   		  <input name="endbid'.$productId.'" class="button" type="submit" value="Bid Ended " />
				   		  </div>';
				}
				?>
				</div>
				
                <div class="highest_bidder">
				<div id="top_highest_bidder">Highest Bidders :</div>
				<?php 
				$highest_bid=mysql_query("SELECT * FROM product_log ORDER BY Time DESC LIMIT 5");
				$highest_bids=mysql_num_rows($highest_bid);
    			if($highest_bids>0)
				{	  
					while ($high = mysql_fetch_array($highest_bid))
					{
						$highest_user=$high["User"];
						$highest_time=$high["Time"];
						echo $highest_user;
						echo "&nbsp;";
						echo $highest_time;
						echo "";
					}
				}
				?>
				</div>
				
              </div></td>
              <td>&nbsp;</td>
            </tr>
          </table>
	  </div>
    	
  </div>
	</div>
	</div><!--wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
</body>
</html>
