<?php
session_start();
if(isset($_SESSION['gr_id']))
{
	include "../connection.php";
	if(isset($_POST['submit']))
	{
		$price = $_POST['service_price'];
		$giver_id = $_POST['giver_id'];
		$csql = "select service_price from price_table where giver_id = $giver_id";
		$cquery = mysqli_query($conn,$csql);
		{
			if(mysqli_num_rows($cquery)>0)
			{
				$_SESSION['already_exist'] = "Price Already Exist.";
				$_SESSION['price'] ="Price have";
				header("location:giverDashboard.php");
			}
			else
			{
				$psql = "insert into price_table(service_price,giver_id) values('$price',$giver_id)";
				$pquery = mysqli_query($conn,$psql)or die("Query is Failed");
				if($pquery)
				{
					$_SESSION['price'] ="Price have";
					header("location:giverDashboard.php");
				}
			}
		}
		


	}
}
else
{
	header("location:../giverlogin.php");
}

?>