<?php
	session_start();
	include "server.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Product</title>
    <link rel="stylesheet" href="../validation/css/validation.css" type="text/css" />
  	<script type="text/javascript" src="../validation/livevalidation_standalone.compressed.js"></script>
</head>

<body>
<div id="wrapper">
		<?php
	  		include "../template/templateheader.php";
		?>
		<div id="content_container">
    	<div class="auction_container">
     		<?php
            if($userid == 1)
			{
				echo '<div id="admin_menu"><a href="../User_Profile/user_profile.php?id=' . $userid . '">' . $username . '</a>  &ndash;
        			<a href="../admin_site/product_form.php">Add Product</a>&ndash;
					<a href="../admin_site/user_list.php">User Listing</a></div>';
			}
			?>	
				<h1><img src="../template/template_image/header/product_information.png" border="0"></h1>
				<div class="smallfont"><br/>
                    All Fields are required to be filled.
				</div>
        	<form action="product_func.php" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
        		<br/><fieldset width="700">
					<legend><font size="5"><strong>Information</strong></legend>
					<table width="650" cellpadding="0" cellspacing="10">
					<tr>
						<td width="20%">
							Brand 
						</td>
						<td width="80%">
							<input type="text" name="brand" value="" class="text" id="brand" size="33" maxlength="50" tabindex="10">
						</td>
					</tr>
                    
                     <tr>
						<td width="25%">
							Model
						</td>
						<td width="75%">
							<input type="text" name="model" value="" class="text" id="model" size="33" maxlength="50" tabindex="10">
						</td>
					</tr>
					<tr>
						<td width="25%">
							Market Price
						</td>
						<td width="75%">
							<table cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td>
									<input type="text" name="marketprice" value="" class="text" id="marketprice" size="33" maxlength="50" tabindex="12">
								</td>
							</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td width="25%">
							Auction Price
						</td>
						<td width="75%">
							<input type="text" name="auctionprice" value="0.00" class="text" id="auctionprice" size="33" maxlength="50" tabindex="13">
						</td>
					</tr>										
                  <tr>
						<td width="25%">
							Category
						</td>
						<td width="75%">
							<select id="category" name="category" size="1" tabindex="3">
                            	<option value="0">Choose</option>
								<option value="Laptop">Laptop</option>
								<option value="Smartphone">Smartphone</option>
                                <option value="Camera">Camera</option>
                                <option value="Printer">Printer</option>
                                <option value="Hardisk">Hardisk</option>
                                <option value="Thumbdrive">Thumbdrive</option>
                                <option value="Computer Accessories">Computer Accessories</option>
                                <option value="Software">Software</option>
							</select>
						</td>
				   </tr>
                    <tr>
						<td width="25%">
							Availability
						</td>
						<td width="75%">
							<select id="availablity" name="availablity" size="1" tabindex="3">
                            	<option value="0">Choose</option>
								<option value="available">Available</option>
								<option value="comingsoon">Coming Soon</option>
							</select>
						</td>
				   </tr>
                   <tr>
						<td>Description</td>
						<td><label>
                        <textarea name="description" cols="50" rows="10"></textarea>
                       		</label>
                        </td>
					</tr>    
                    <tr>
						<td>Product Image</td>
						<td><label>
                        	<input type="file" name="image" id="image"/>
                       		</label>
                        </td>
					</tr>    
				   </table>
					
					<input type="submit" name="button" class="form_button" value="Submit" />                    
				</fieldset>
                </form>
                </br>
        
	  </div>  <!--end div auction container-->
	</div>  <!--end div content_container-->
</div>  <!--end div wrapper-->
		<?php
	  		include "../template/templatefooter.html";
		?>
</body>
</html>