<?php
session_start();

if(isset($_SESSION['sr_id']))
{
	include "../connection.php";
	if($_GET['seeker_id'])
	{

	}
	$sr_id ="";
	$suserfullname = "";
	$semail ="";
	$smobileNumber ="";
	$saddress ="";
  	$sr_id = $_SESSION['sr_id'];

  	$sgsql = "select sr_id,suserfullname,semail,smobileNumber,saddress from seekerregistration where sr_id =$sr_id";
  	$sgquery = mysqli_query($conn,$sgsql) or die("query is failed");

	  if($sgquery)
	  {
	  		if(mysqli_num_rows($sgquery)>0)
	  		{
	  			while($rowsg = mysqli_fetch_assoc($sgquery))
	  			{
	  				//print_r($rowsg);
	  				$siver_id =$rowsg['sr_id'];
					$suserfullname =$rowsg['suserfullname'];
					$semail =$rowsg['semail'];
					$smobileNumber =$rowsg['smobileNumber'];
					$saddress =$rowsg['saddress'];
	
	  		}
?>