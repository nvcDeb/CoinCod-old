<?php
// Load the Savant3 class file and create an instance.
require_once '../Savant3.php';
require_once '../template/functions.php';
session_start();
// initialize template engine
$tpl = new Savant3();

// set search path for templates
$tpl->addPath('template', '../template');

$pid= mysql_real_escape_string($_POST['pid']);
			$get_product_info=mysql_query("SELECT * FROM product_list WHERE product_id='$pid'");
			$getinfo=mysql_fetch_array($get_product_info);
			$brand=$getinfo["Brand"];
			$model=$getinfo["Model"];
			$marketprice=$getinfo["market_price"];
			$auctionprice=$getinfo["auction_price"];
			$category=$getinfo["Category"];
			$availability=$getinfo["Availability"];
			$description=$getinfo["Description"];
			$totalbid=$getinfo["total_bid"];


// Create a title.
$template_path = "../template/";
$resource_path = "../";
$title = "Product Information";
$meta_description = "Welcome to CoinCod - a unique auction system built to draw everyone closer to their dream products.";
$product_form = '				<article class="smallfont">
           All Fields are required to be filled.
			</article>
        	
					<form action="product_update.php" enctype="multipart/form-data" name="myForm" id="myForm" method="post" onsubmit="editor.post()">
        			<fieldset width="700">
					<legend><font size="5"><strong>Information</strong></legend>
					<table width="650" cellpadding="0" cellspacing="10">
					<tr>
						<td width="20%">
							Product ID
						</td>
						<td width="80%">
							<?php echo $pid; ?>
                            <input type="hidden" name="pid" id="pid" value="'.$pid.'"/>
						</td>
					</tr
                    ><tr>
						<td width="20%">
							Brand 
						</td>
						<td width="80%">
							<input type="text" name="brand" value="'.$brand.'" class="text" id="brand" size="33" maxlength="50" tabindex="10">
						</td>
					</tr>
                    
                     <tr>
						<td width="25%">
							Model
						</td>
						<td width="75%">
							<input type="text" name="model" value="'.$brand.'" class="text" id="model" size="33" maxlength="50" tabindex="10">
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
									<input type="text" name="marketprice" value="'.$marketprice.'" class="text" id="marketprice" size="33" maxlength="50" tabindex="12">
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
							<input type="text" name="auctionprice" value="'.$auctionprice.'" class="text" id="auctionprice" size="33" maxlength="50" tabindex="13">
						</td>
					</tr>										
                  <tr>
						<td width="25%">
							Category
						</td>
						<td width="75%">
							<select id="category" name="category" size="1" tabindex="3">
                            	<option value="'.$category.'">'.$category.'</option>
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
							<select id="availablity" name="availability" size="1" tabindex="3">
                            	<option value="'.$availability.'">'.$availability.'</option>
								<option value="available">Available</option>
								<option value="comingsoon">Coming Soon</option>
							</select>
						</td>
				   </tr>
                   <tr>
						<td>Description</td>
						<td><label>
                        <textarea id="tinyeditor" name="tinyeditor" rows="15" cols="80" style="width: 80%">
						'.$description.'
						</textarea>
						<script>
							var editor = new TINY.editor.edit("editor", {
							id: "tinyeditor",
							width: 584,
							height: 175,
							cssclass: "tinyeditor",
							controlclass: "tinyeditor-control",
							rowclass: "tinyeditor-header",
							dividerclass: "tinyeditor-divider",
							controls: ["bold", "italic", "underline", "strikethrough", "|", "subscript", "superscript", "|",
										"orderedlist", "unorderedlist", "|", "outdent", "indent", "|", "leftalign",
										"centeralign", "rightalign", "blockjustify", "|", "unformat", "|", "undo", "redo", "n",
										"font", "size", "style", "|", "image", "hr", "link", "unlink", "|", "print"],
							footer: true,
							fonts: ["Verdana","Arial","Georgia","Trebuchet MS"],
							xhtml: true,
							cssfile: "custom.css",
							bodyid: "editor",
							footerclass: "tinyeditor-footer",
							toggle: {text: "source", activetext: "wysiwyg", cssclass: "toggle"},
							resize: {cssclass: "resize"}
							});
						</script>
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
                    <tr>
                    <td>Total Bid</td>
						<td>'.$totalbid.'</td>
					</tr>    
				   </table>
					
					<input type="submit" name="button" class="form_button" value="Edit Save" />                    
				</fieldset>
                </form>';

$contentContainer = array(
    array(
        "title" => $title,
        "content" => $product_form,
		"bottom_image" =>''
    )
);

// Assign values to the Savant instance.
$tpl->template_path = $template_path;
$tpl->resource_path = $resource_path;
$tpl->title = $title;
$tpl->meta_description = $meta_description;
$tpl->content_container = $contentContainer;

// Display a template using the assigned values.
$tpl->login = $tpl->fetch($template_path.'login.tpl.php');
$tpl->header = $tpl->fetch($template_path.'header.tpl.php');
$tpl->footer = $tpl->fetch($template_path.'footer.tpl.php');
$tpl->display($template_path.'main.tpl.php');