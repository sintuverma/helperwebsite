<?php
session_start();
if(isset($_SESSION['gr_id']))
{ 
	include "../connection.php";
	if(isset($_POST['submit']))
	{
		
			 $price_id =mysqli_real_escape_string($conn,$_POST['price_id']);
		     $updprice =mysqli_real_escape_string($conn,$_POST['update_price']);
			$upsql = "update price_table set service_price='$updprice' where price_id= $price_id";
			//echo $upsql;
			//die("update page");
			$upquery = mysqli_query($conn,$upsql);
			if($upquery)
			{
				$_SESSION['price_change'] = " Price is changed Successfully.";
				header("location:giverDashboard.php");
			} 
			
		
	}
}
	else
	{
		header("location:../giverlogin.php");
	}

?>