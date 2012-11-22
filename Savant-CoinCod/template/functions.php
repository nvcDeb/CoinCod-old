<?PHP
// attempt a connection
require $this->template_path.'config.php';

//Check if magic qoutes is on then stripslashes if needed
function codeClean($var)
{
	$res = mysql_real_escape_string((get_magic_quotes_gpc())? stripslashes($var): $var);
	return $res;
}

function get_sitestatus() {
	$getstatus=mysql_query("SELECT * FROM status");
	$get=mysql_fetch_array($getstatus);
	$status=$get["site_status"];
	return $status;
}

//Login functions
function verifyLogin($email,$pass)
{
	$hash_pass = md5($pass);
	
	$sql = "SELECT * FROM user_account WHERE Email = '".$email."' AND hash_password = '" . $hash_pass . "'";
	$res = mysql_query($sql);
	$num = mysql_num_rows($res);

	if ($num > 0)
		return true;
	return false;	
}

//Update account functions
function getUserRecords($email)
{
	$sql = "SELECT * FROM user_account WHERE Email = '" . $email . "'"; 
	$res = mysql_query($sql);
	$a = mysql_fetch_array($res);
	$records['id'] = $a["user_id"];
	$records["category"] = $a["Category"];
	$records["username"] = $a["Username"];
	$records["email"] = $a["Email"];
	$records["fname"] = $a["first_name"];
	$records["lname"] = $a["last_name"];
	$records["dob"] = $a["date_birth"];
	$records["gender"] = $a["Gender"];
	$records["add1"] = $a["Address1"];
	$records["add2"] = $a["Address2"];
	$records["city"] = $a["City"];
	$records["state"] = $a["State"];
	$records["zip"] = $a["Zip"];
	$records["country"] = $a["Country"];
	$records["mobile"] = $a["Mobile"];
	$records["activation"] = $a["Activation"];
	$records["token"] = $a["Token"];

	return $records;
}

//Update account functions
function updateUser($id, $email, $user, $first_name, $last_name, $year, $month, $day, $gender, $add1, $add2, $city, $state, $zip, $mobile)
{
			$id = codeClean($id);
	     $email = codeClean($email);
		  $user = codeClean($user);
		 $fname = codeClean($first_name);
		 $lname = codeClean($last_name);
		  $year = codeClean($year);
		 $month = codeClean($month);
		   $day = codeClean($day);
	    $gender = codeClean($gender);
		  $add1 = codeClean($add1);
	      $add2 = codeClean($add2);
		  $city = codeClean($city);
		 $state = codeClean($state);
		   $zip = codeClean($zip);
	   $country = codeClean($country);
		$mobile = codeClean($mobile);
		   
		if($month == '')			{ $month = 00;	}
		if($month == 'January')		{ $month = 01;	}
		if($month == 'February')	{ $month = 02;	}
		if($month == 'March')		{ $month = 03;	}
		if($month == 'April')		{ $month = 04;	}
		if($month == 'May')			{ $month = 05;	}
		if($month == 'June')		{ $month = 06;	}
		if($month == 'July')		{ $month = 07;	}
		if($month == 'August')		{ $month = 08;	}
		if($month == 'September')	{ $month = 09;	}
		if($month == 'October')		{ $month = 10;	}
		if($month == 'November')	{ $month = 11;	}
		if($month == 'December')	{ $month = 12;	}
		$dob=sprintf("%04d-%02d-%02d", $year, $month, $day);
				
		$to = $email;
		$toname = $user;
		$from = "contact@nexvend.com";
		$fromname ="Customer Service";
		$subject = "Complete your registration";
		$message = '<html>
					Dear ' . $user . ',
					<br /><br />
					Your personal information was updated. We hope you have an enjoyable auction experience with us.
					<br /><br /> 
					Thank You!  
					<br /><br /> 
					Best Regards,<br/>
					CoinCod Management Team
					</body>
					</html>';
		$headers = "From: $fromname <$from>\r\n";
		$headers .= "Content-type: text/html\r\n";
		$headers .= "Bcc: wilson@nexvend.com";
		$to = "$toname <$to>";
		$sending = mail($to, $subject, $message, $headers);
		
		if($sending) {
			$sql = "UPDATE user_account SET Username='$user', first_name='$fname', last_name='$lname', date_birth='$dob', Gender='$gender', Address1='$add1', Address2='$add2', City='$city', Zip='$zip', State='$state', Mobile='$mobile' WHERE user_id='$id'";		
			$res = mysql_query($sql);
			return 99;
		} else {
			return 98;
		}
}

function sendpassword($emails) {
	$password_check = mysql_query("SELECT * FROM user_account WHERE Email='$emails'");
	$passwords_check = mysql_num_rows($password_check);
	$row = mysql_fetch_array($password_check);
	$recover_password = $row["Password"];
	$recover_name = $row["Username"];
	if($passwords_check == 1) {
		$to = "$emails";
		$toname = $recover_name;
		$from = "hychan_89@hotmail.com";
		$fromname = "Customer Service";
		$subject = "Forgot Password";
		$messages = '<html>
					<body>
					This is your basic account information registered with CoinCod. 
					<br/><br/>
					E-mail Address: ' . $emails . ' <br />
					Password: ' . $recover_password . ' 
					<br/>
					Enjoy your awesome first auction experience with Coincod.
					<br /><br /> 
					Thank You! 
					<br /><br />
					NOTE:If you did not request for this email. Kindly ignore it.
					<br /><br />
					Best Regards,
					CoinCod Management Team
					</body>
					</html>';
				// end of message
		$headers = "From: $fromname <$from>\r\n";
		$headers .= "Content-type: text/html\r\n";
		$headers .= "Bcc: wilson@nexvend.com";
		$to = "$toname <$to>";

        $sentmail = mail($to,$subject,$messages,$headers);
		if($sentmail) {
			$result .= "Your password has been successfully sent to your email.";
    	} else {
			$result .= "Sorry. The password failed to be sent. Please retry.";
    	}
	} else {
		$result = "Sorry, this email cannot be found";
	}
	return $result;
}

function registeruser($emails, $username, $passwords, $re_password, $firstname, $lastname, $dob, $gender, $add1, $add2, $city, $state, $zip, $country, $mobile) {
	$username_check = mysql_query("SELECT * FROM user_account WHERE Username='$username' LIMIT 1");
	$username_checks = mysql_num_rows($username_check);
	$email_check = mysql_query("SELECT * FROM user_account WHERE Email='$emails' LIMIT 1");
	$email_checks = mysql_num_rows($email_check);
	
	if ($username_checks > 0) {
		$error .= " your username is taken.Please use another username";
	} else if ($email_checks > 0) {
		$error .= " your email already register.Please go forgot password.";
	} else {
		$getid=mysql_query("SELECT * FROM user_account WHERE user_id = (select Max(user_id) from user_account);");
		$getId = mysql_fetch_array($getid);
		$max_id = $getId["user_id"];
		$id = $max_id + 1;
		
		$to = $emails;
		$toname = $username;
		$from = "wilson@nexvend.com";
		$fromname = "Customer Service";
		$subject = "Complete your registration";
		$message = '<html>
					<body>
					<article>
					Dear ' . $username . ',
					<br /><br />
					Congratulations for the successful registeration with CoinCod.  
					You must complete this last step in order to enjoy the wonderful auction experience that we will bring to you.
					<br /><br />
					To activate your account, please click on the confirmation link below (if link is not clickable, copy and paste the entire link into your
					browser) : &gt;&gt;
					<a href="'.$_SERVER['SERVER_NAME'].'/registration/register_activation.php?id=' .$id. '">
					ACTIVATE NOW</a>
					<br /><br />
					Your login information are as follows: 
					<br /><br />
					E-mail Address: ' . $emails . ' <br />
					Password: ' . $passwords . ' 
					<br /><br /> 
					Thanks You!  
					<br /><br /> 
					Best Regards,
					CoinCod Management Team
					</article>
					</body>
					</html>';
		// end of message
		$headers = "From: $fromname <$from>\r\n";
		$headers .= "Content-type: text/html\r\n";
		$headers .= "Bcc: wilson@nexvend.com";
		$to = "$toname <$to>";
		// Finally send the activation email to the member
		$sentactive = mail($to, $subject, $message, $headers);
		if($sentactive) {
			$hash_password = md5($passwords); //MD5 encryption.
			$sqlCommand = "INSERT INTO user_account 			(user_id,Category,Username,Email,Password,hash_password,first_name,last_name,date_birth,Gender,Address1,Address2,City,State,Zip,Country,Mobile,date_register,Activation,Token) VALUES('$id','0','$username','$emails','$passwords','$hash_password','$firstname','$lastname','$dob','$gender','$add1','$add2','$city','$state','$zip','$country','$mobile',now(),'0','10')";  		

			$query = mysql_query($sqlCommand) or die (mysql_error()); 
			$error .= "Congratulations! Your registration is successful!<br /> 
			There is one last step to bring you closer to the wonderful experience that we are going to bring you.<br />
			Before that, you need to verify your email identity:<br />
			We have just sent an activation link to your email<br /><br />
			Please check your email inbox, there should be an activation link attached to the email.<br />
			Click on the link inside the email. After clicking the activation email you can log in.";
		} else {
			$error .= "Activation Email failed to be sent";
		}
	}
	return $error;
}

function activationuser($id) {
	if (!$id) {	
		$error .= "</br>Missing Data";
	} else {
		$sql = mysql_query("UPDATE user_account SET Activation='1' WHERE user_id='$id'"); 

		$update_activation = mysql_query("SELECT * FROM user_account WHERE user_id='$id' AND Activation='1'"); 
		$updateactivation = mysql_num_rows($update_activation); 
		if($updateactivation == 0) { 
			$error .= "</br>Caution! This account cannot be activate.";
		} elseif ($updateactivation > 0) {
			$error .= "</br>Congratulations! This account is succesfully activated."; 
		} 
	}
	return $error;
}

//get user listing
function getUserListing()
{
	$sql = "SELECT * FROM user_account"; 
	$res = mysql_query($sql);

	$c=0;
	while ($a_row = mysql_fetch_array($res)) {
		$records[$c]["id"] = $a_row["user_id"];
		$records[$c]["email"] = $a_row["Email"];
		$records[$c]["username"] = $a_row["Username"];
		$records[$c]["date"] = $a_row["date_register"];
		$records[$c]["token"] = $a_row["Token"];
	$c++;
    }
	
	return $records;
}

function totaluser() {
$sql = "SELECT * FROM user_account"; 
	$res = mysql_query($sql);
	$totaluser = mysql_num_rows($res);
	return $totaluser;
}

function insertproduct($brand, $model, $marketprice, $auctionprice, $category, $availablity, $description) {
	$product_check=mysql_query("SELECT * FROM product_list WHERE Brand='$brand' and Model='$model' LIMIT 1");
	$productcheck = mysql_num_rows($product_check);
	if($productcheck > 0)
	{
		$error = "Sorry! The product is being duplicated. This should not happen!!!";
	}
	else
	{
		$getid=mysql_query("SELECT * FROM product_list WHERE product_id = (select Max(product_id) from product_list);");
		$getId = mysql_fetch_array($getid);
		$max_id = $getId["product_id"];
		$productid = $max_id + 1;

		$product_insert = "INSERT INTO product_list(product_id,Brand, Model, market_price, auction_price, Category, Availability,Description) VALUES('$productid','$brand','$model','$marketprice','$auctionprice','$category','$availability','$description')";  
		$productinsert = mysql_query($product_insert) or die (mysql_error()); 		
		
		//insert to product_images
		$productname="$productid.jpg";
		move_uploaded_file($_FILES["image"]["tmp_name"],"$PREFIX/product/product_image/$productname");
	
		if($productinsert == 1)
		{
			$error = "Product is successfully saved into database<br/>";
		}
		else
		{
			$error = "Product failed to be saved.";
		}
	}
	return $error;
}

//get user listing
function getProductList()
{
	$sql = "SELECT * FROM product_list"; 
	$res = mysql_query($sql);

	$c=0;
	while ($a_row = mysql_fetch_array($res)) {
		$records[$c]["pid"] = $a_row["product_id"];
		$records[$c]["brand"] = $a_row["Brand"];
		$records[$c]["model"] = $a_row["Model"];
		$records[$c]["mprice"] = $a_row["market_price"];
		$records[$c]["aprice"] = $a_row["auction_price"];
		$records[$c]["category"] = $a_row["Category"];
		$records[$c]["availablity"] = $a_row["Availability"];
		$records[$c]["description"] = $a_row["Description"];
		$records[$c]["bid"] = $a_row["total_bid"];
		$records[$c]["astart"] = $a_row["auction_start"];
		$records[$c]["aend"] = $a_row["auction_end"];
	$c++;
    }
	
	return $records;
}

function getTotalProduct()
{
	$sql = "SELECT * FROM product_list"; 
	$res = mysql_query($sql);
	$records = mysql_num_rows($res);
	return $records;
}

function getTopBidder()
{
	$sql = "SELECT * FROM product_log WHERE auction_price=(select max(auction_price) from product_log)"; 
	$res = mysql_query($sql);
	$records = mysql_fetch_array($res);
	$highest_user=$records["Username"];
	return $highest_user;
}

function getProductDetails($pid)
{
	$sql = "SELECT * FROM product_list WHERE product_id='$pid'"; 
	$res = mysql_query($sql);
	$a_row = mysql_fetch_array($res);
	
	$records["pid"] = $a_row["product_id"];
	$records["brand"] = $a_row["Brand"];
	$records["model"] = $a_row["Model"];
	$records["mprice"] = $a_row["market_price"];
	$records["aprice"] = $a_row["auction_price"];
	$records["category"] = $a_row["Category"];
	$records["availablity"] = $a_row["Availability"];
	$records["description"] = $a_row["Description"];
	$records["bid"] = $a_row["total_bid"];
	$records["astart"] = $a_row["auction_start"];
	$records["aend"] = $a_row["auction_end"];
	
	return $records;
}

function getBidderList() {
	$sql = "SELECT * FROM product_log ORDER BY Time DESC LIMIT 5"; 
	$res = mysql_query($sql);
	$c=0;
	while ($a_row = mysql_fetch_array($res)) {
		$records[$c]['username'] = $a_row["Username"];
		$records[$c]['time'] = $a_row["Time"];

	$c++;
    }
	
	return $records;
}

function searchTotalProduct($term) {
	$sql = "SELECT * FROM product_list WHERE Brand LIKE '%$term%'"; 
	$res = mysql_query($sql);
	$totalsearch = mysql_num_rows($res);
	return $totalsearch;
}

function searchProduct($term) {
	$sql = "SELECT * FROM product_list WHERE Brand LIKE '%$term%'"; 
	$res = mysql_query($sql);
	$c=0;
	while ($a_row = mysql_fetch_array($res)) {
		$records["pid"] = $a_row["product_id"];
		$records["brand"] = $a_row["Brand"];
		$records["model"] = $a_row["Model"];
		$records["mprice"] = $a_row["market_price"];
		$records["aprice"] = $a_row["auction_price"];
		$records["category"] = $a_row["Category"];
		$records["availablity"] = $a_row["Availability"];
		$records["description"] = $a_row["Description"];
		$records["bid"] = $a_row["total_bid"];
		$records["astart"] = $a_row["auction_start"];
		$records["aend"] = $a_row["auction_end"];

	$c++;
    }
	return $records;
}

function searchTopBidder()
{
	$sql = "SELECT * FROM product_log WHERE auction_price=(select max(auction_price) from product_log)"; 
	$res = mysql_query($sql);
	$records = mysql_fetch_array($res);
	$highest_user=$records["Username"];
	return $highest_user;
}
?>