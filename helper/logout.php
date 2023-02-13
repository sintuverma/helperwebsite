<?php

//unset($_SESSION['guserfullname']);
session_destroy();
header("location:giverlogin.php");
?>

if(isset($_POST['submit']))
	{
		if(isset($_POST['price_id'])
		{
			$price_id =$_POST['price_id'];
			$updprice =$_POST['update_price'];
			$upsql = "update price_table set service_price where price_id= $price_id";
			echo $upsql; 
		}
		else
		{
			header("location:giverDashboard.php");
		}
	}