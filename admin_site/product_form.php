<?php
	session_start();
	include "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Product</title>
    <link rel="stylesheet" href="../validation/css/validation.css" type="text/css" />
  	<script type="text/javascript" src="../validation/livevalidation_standalone.compressed.js"></script>
	
<!-- TinyMCE -->
<script type="text/javascript" src="../TinyMce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		skin : "o2k7",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example word content CSS (should be your site CSS) this one removes paragraph margins
		content_css : "../TinyMce/css/word.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "../TinyMce/lists/template_list.js",
		external_link_list_url : "../TinyMce/lists/link_list.js",
		external_image_list_url : "../TinyMce/lists/image_list.js",
		media_external_list_url : "../TinyMce/lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->
	
	
	
</head>

<body>
<div id="wrapper">
		<?php
	  		include "../template/templateheader.php";
		?>
		<section id="content_container">
    	<section class="auction_container">
     		<?php
            if($userid == 1)
			{
				echo '<div id="admin_menu"><a href="../User_Profile/user_profile.php?id=' . $userid . '">' . $username . '</a>  &ndash;
        			<a href="../admin_site/product_form.php">Add Product</a>&ndash;
					<a href="../admin_site/user_list.php">User Listing</a>&ndash;
					<a href="../admin_site/sitestatus_updateform.php">Site Status</a></div>';
			}
			?>	
				<h1><img src="../template/template_image/header/product_information.png" border="0"></h1>
				<div class="smallfont">
                    All Fields are required to be filled.
				</div>
        	<form action="product_func.php" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
        		<fieldset width="700">
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
                        <!--<textarea name="description" cols="50" rows="10"></textarea>-->
						<textarea id="description" name="description" rows="15" cols="80" style="width: 80%">

						</textarea>
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
                
        
	  </section>  <!--end div auction container-->
	</section>  <!--end div content_container-->
</div>  <!--end div wrapper-->
		<?php
	  		include "../template/templatefooter.html";
		?>
</body>
</html>