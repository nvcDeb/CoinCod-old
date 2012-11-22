<?php
	include_once 'functions.php';
	require $this->template_path.'config.php';
	
	if(isset($_POST["btnAdd"])){
		
		$result = insertproduct($_POST['brand'], $_POST['model'], $_POST['marketprice'], $_POST['auctionprice'], $_POST['category'], $_POST['availablity'], $_POST['tinyeditor']);
?>
	<div style="color:red;">
		<?php echo $result;?>
	</div>
<?php } ?>
<div class="smallfont">
    All Fields are required to be filled.
</div>
<form action="" enctype="multipart/form-data" name="myForm" id="myForm" method="post" onsubmit="editor.post()">
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
					<textarea id="tinyeditor" name="tinyeditor" rows="15" cols="80" style="width: 80%"></textarea>
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
				<td>
					<label>
                       	<input type="file" name="image" id="image"/>
               		</label>
                </td>
			</tr>    
		</table>
					
		<input type="submit" name="btnAdd" class="form_button" value="Submit" />                    
	</fieldset>
</form>