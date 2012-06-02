<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Listing</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../server.php";
		include "../template/templateheader.php";
	?>
    <div id="content_container">
    	<div class="auction_container">
		<div id="user_list">
		
        <?php
			
			if($userid == 1)
			{
				echo '<div id="admin_menu"><a href="../User_Profile/user_profile.php?id=' . $userid . '">' . $username . '</a>  &ndash;
        			<a href="../admin_site/product_form.php">Add Product</a>&ndash;
					<a href="../admin_site/user_list.php">User Listing</a></div>
					';
					
			}

        	$user_list=mysql_query("SELECT * FROM user_account");
			$userLIST=mysql_num_rows($user_list);
    		if($userLIST>0)
			{	 
					echo '<h1><img src="../template/template_image/header/user_list.png" border="0"></h1><div class="title_bold"><table border="0">
						  <tr width="100">
						  <td width="100">User Id</td>
						  <td width="100">Username</td>
						  <td width="150">Email</td>
						  <td width="100">Date Register</td>
						  <td width="100">Token</td>
						  <td width="100">Use Token</td>
						  <td width="100">Buy Token</td>
						  </tr>
						  </table></div>';
						  
				while ($row = mysql_fetch_array($user_list))
				{
					$userID=$row["User_Id"];
					$username=$row["Username"];
					$email=$row["Email"];
					$dateregister=$row["Date_Register"];
					$token=$row["Token"];
					$yestoken=$row['Yesterday_Token'];
					$usetoken=$yestoken - $token;
						
					echo '<table border="0">
						  <tr width="100">
						  <td width="100">'.$userID.'</td>
						  <td width="100">'.$username.'</td>
						  <td width="150">'.$email.'</td>
						  <td width="100">'.$dateregister.'</td>
						  <td width="100">'.$token.'</td>
						  <td width="100">'.$usetoken.'</td>
						  <td width="100">buy</td>
						  </tr>
						  </table>'; 
		}
	}
	else
	{
	 	echo "no data";
	}
?> <br>
       </div> <!--end div user_list-->
	  </div><!--end div auction container-->
	</div><!--end div content_container-->
</div><!--end div wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
</body>
</html>