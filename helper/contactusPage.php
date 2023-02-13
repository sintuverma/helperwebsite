<?php
session_start();
include "connection.php";
if(isset($_POST['submit']))
{
	echo $contactname =mysqli_real_escape_string($conn,$_POST['contactname']);
	echo $cemail =mysqli_real_escape_string($conn,$_POST['cemail']);
	echo $cmobile =mysqli_real_escape_string($conn,$_POST['cmobile']);
	echo $message =mysqli_real_escape_string($conn,$_POST['message']);
	$csql = "insert into contactus (cont_id,contactname,cemail,cmobile,message) values('$contactname','$cemail','$cmobile','$message')";
	$cquery = mysqli_query($conn,$csql) or die("Query is Failed");
	if($cquery)
	{
		$_SESSION['feedback'] = "Your Query & Feedback is Registered ";
		header("location:contactUs.php");
	}
	else
	{
		$_SESSION['feedbackerr'] = "Sorry Something is wrong! ";
		header("location:contactUs.php");
	}
	
}