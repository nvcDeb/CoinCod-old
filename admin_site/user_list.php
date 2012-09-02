<?php
	session_start();
	include "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>User Listing</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../template/templateheader.php";
	?>
    <section id="content_container">
    	<section div class="auction_container">
		<section id="user_list">
		
        <?php		
			if($userid == 1)
			{
				echo '<div id="admin_menu"><a href="'.$PREFIX.'/User_Profile/?id=' . $userid . '">' . $username . '</a>  &ndash;
        			<a href="'.$PREFIX.'/admin_site/product_form.php">Add Product</a>&ndash;
					<a href="'.$PREFIX.'/admin_site/user_list.php">User Listing</a>&ndash;
					<a href="'.$PREFIX.'/admin_site/sitestatus_updateform.php">Site Status</a></div>
					';
					
			}

        	$user_list=mysql_query("SELECT * FROM user_account");
			$userLIST=mysql_num_rows($user_list);
    		if($userLIST>0)
			{	 
					echo '<h5>User Lists</h5><div class="title_bold"><table border="0">
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
					$userID=$row["user_id"];
					$username=$row["Username"];
					$email=$row["Email"];
					$dateregister=$row["date_register"];
					$token=$row["Token"];
						
					echo '<table border="0">
						  <tr width="100">
						  <td width="100">'.$userID.'</td>
						  <td width="100">'.$username.'</td>
						  <td width="150">'.$email.'</td>
						  <td width="100">'.$dateregister.'</td>
						  <td width="100">'.$token.'</td>
						  <td width="100">buy</td>
						  </tr>
						  </table>'; 
		}
	}
	else
	{
	 	echo "no data";
	}
?> 
       </section> <!--end div user_list-->
	  </section><!--end div auction container-->
	</section><!--end div content_container-->
</div><!--end div wrapper-->
	<?php
		include "../template/templatefooter.html";
	?>
</body>
</html>