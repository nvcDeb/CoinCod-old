<?php
session_start();
include "../server.php";
if((isset($_POST['pid'])) && (isset($_POST['uid'])))
{
	$pid=$_POST['pid'];
	$uid=$_POST['uid'];
	//get info from user_account table
	$getuser=mysql_query("SELECT * FROM user_account WHERE User_Id='$uid'");
	$get=mysql_fetch_array($getuser);
	$oldtoken=$get["Token"];
	$username=$get["Username"];
	$emails=$get["Email"];
	//get info from product_list table
	$getproduct=mysql_query("SELECT * FROM product_list WHERE Product_Id='$pid'");
	$get=mysql_fetch_array($getproduct);
	$oldtotalbid=$get["Total_Bid"];
	$oldauctionprice=$get["Auction_Price"];

	if($oldtotalbid <=200)                                
	{		
		$newtoken = $oldtoken - 1;   	
		$newauctionprice = $oldauctionprice - 0.01; 
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.01;
		}
	}
	if($oldtotalbid > 200 && $oldtotalbid <= 400)         
	{		
		$newtoken = $oldtoken - 2;		
		$newauctionprice = $oldauctionprice - 0.02; 
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else
		{
			$newprice = $oldauctionprice + 0.02;
		}		
	}
	if($oldtotalbid > 400 && $oldtotalbid <= 600)         
	{		
		$newtoken = $oldtoken - 3;		
		$newauctionprice = $oldauctionprice - 0.03; 	
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.03;
		}
	}
	if($oldtotalbid > 600 && $oldtotalbid <= 800)         
	{		
		$newtoken = $oldtoken - 4;		
		$newauctionprice = $oldauctionprice - 0.04; 
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.04;
		}		
	}
	if($oldtotalbid > 800 && $oldtotalbid <= 1000)        
	{		
		$newtoken = $oldtoken - 5;		
		$newauctionprice = $oldauctionprice - 0.05; 
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.05;
		}		
	}
	if($oldtotalbid > 1000 && $oldtotalbid <= 1200)       
	{		
		$newtoken = $oldtoken - 6;		
		$newauctionprice = $oldauctionprice - 0.06;
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.06;
		}
	}
	if($oldtotalbid > 1200 && $oldtotalbid <= 1400)       
	{	
		$newtoken = $oldtoken - 7;		
		$newauctionprice = $oldauctionprice - 0.07;
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.07;
		}
	}
	if($oldtotalbid > 1400 && $oldtotalbid <= 1600)       
	{	
		$newtoken = $oldtoken - 8;		
		$newauctionprice = $oldauctionprice - 0.08;
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.08;
		}
	}
	if($oldtotalbid > 1600 && $oldtotalbid <= 1800)       
	{	
		$newtoken = $oldtoken - 9;		
		$newauctionprice = $oldauctionprice - 0.09; 
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.09;
		}
	}
	if($oldtotalbid > 1800 && $oldtotalbid <= 2000)       
	{	
		$newtoken = $oldtoken - 10;		
		$newauctionprice = $oldauctionprice - 0.10; 
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.10;
		}		
	}
	if($oldtotalbid > 2000 && $oldtotalbid <= 2200)       
	{	
		$newtoken = $oldtoken - 11;		
		$newauctionprice = $oldauctionprice - 0.11; 
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.11;
		}
	}
	if($oldtotalbid > 2200 && $oldtotalbid <= 2400)       
	{	
		$newtoken = $oldtoken - 12;		
		$newauctionprice = $oldauctionprice - 0.12; 	
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.12;
		}
	}
	if($oldtotalbid > 2400 && $oldtotalbid <= 2600)       
	{	
		$newtoken = $oldtoken - 13;		
		$newauctionprice = $oldauctionprice - 0.13; 	
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.13;
		}
	}
	if($oldtotalbid > 2600 && $oldtotalbid <= 2800)       
	{	
		$newtoken = $oldtoken - 14;		
		$newauctionprice = $oldauctionprice - 0.14; 	
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.14;
		}
	}
	if($oldtotalbid > 2800 && $oldtotalbid <= 3000)       
	{	
		$newtoken = $oldtoken - 15;		
		$newauctionprice = $oldauctionprice - 0.15; 
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.15;
		}
	}
	if($oldtotalbid > 3000 && $oldtotalbid <= 3200)       
	{	
		$newtoken = $oldtoken - 16;		
		$newauctionprice = $oldauctionprice - 0.16; 	
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.16;
		}
	}
	if($oldtotalbid > 3200 && $oldtotalbid <= 3400)       
	{	
		$newtoken = $oldtoken - 17;		
		$newauctionprice = $oldauctionprice - 0.17; 	
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.17;
		}
	}
	if($oldtotalbid > 3400 && $oldtotalbid <= 3600)       
	{	
		$newtoken = $oldtoken - 18;		
		$newauctionprice = $oldauctionprice - 0.18; 	
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.18;
		}
	}
	if($oldtotalbid > 3600 && $oldtotalbid <= 3800)       
	{	
		$newtoken = $oldtoken - 19;		
		$newauctionprice = $oldauctionprice - 0.19; 
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.19;
		}
	}
	if($oldtotalbid > 3800 && $oldtotalbid <= 4000)       
	{	
		$newtoken = $oldtoken - 20;		
		$newauctionprice = $oldauctionprice - 0.20; 
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.20;
		}
	}
	if($oldtotalbid > 4000)         					  
	{ 	
		$newtoken = $oldtoken - 25;		
		$newauctionprice = $oldauctionprice - 0.25; 	
		if($newauctionprice > 0)
		{
			$newprice = $newauctionprice;
		}
		else if($newauctionprice < 0)
		{
			$newprice = $oldauctionprice + 0.25;
		}
	}
	
	if($newtoken >= 0)
	{
		$updatetoken = "UPDATE user_account SET token='$newtoken' WHERE User_Id='$uid'";
		$querytoken = mysql_query($updatetoken) or die (mysql_error());
	
		//update total bid and auction price
		$newauctionstart=time();
		$newauctionend=time()+ 30;
		$newtotalbid = $oldtotalbid + 1;
			
		$updatetimer = "UPDATE product_list SET Auction_Price='$newprice', Auction_Start='$newauctionstart', Auction_End='$newauctionend', Total_Bid='$newtotalbid' WHERE Product_Id='$pid'"; 		
		$querytimer = mysql_query($updatetimer) or die (mysql_error()); 
	
		//insert to product listing
		$insert_product_listing = "INSERT INTO product_log (Product_Id,User_Id,Username,User_Email,Auction_Price,Time)VALUES('$pid','$uid','$username','$emails','$newprice',now())";  		
		$queryinsert = mysql_query($insert_product_listing) or die (mysql_error()); 

		header("location:../index.php");
	}
	else
	{
		header("location:../Buy_Tokens");
	}
}
?>