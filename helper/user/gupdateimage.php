<?php
session_start();
include "../connection.php";
if(isset($_SESSION['gr_id']))
{
	if(isset($_FILES['gimage']))
	{
		$gr_id = $_POST['gr_id'];
		//print_r($_FILES['gimage']);
		echo $file_name = date('d-m-Y-h-s').$_FILES['gimage']['name'];
		//die();
		echo $file_size = $_FILES['gimage']['size'];
		echo $file_tmp_name = $_FILES['gimage']['tmp_name'];
		echo $file_type = $_FILES['gimage']['type'];
		$file_path="../images/projectimages/";
		if(move_uploaded_file($file_tmp_name,$file_path.$file_name))
		{
			$upisql = "update giverregistration set gimage='$file_name' where gr_id= $gr_id";
			$upiquery= mysqli_query($conn,$upisql)or die("quer is failed");
			if($upiquery)
			{
				$_SESSION['img_successfully']="Image successfully Uploaded.";
				header("location:giverprofile.php");
			}
			else
			{
				$_SESSION['img_uperror'] =" Sorry Image Could Not Uploaded";
				header("location:giverprofile.php");
			}
			
		}
		else
		{
			$_SESSION['img_uperror'] =" Sorry Image Could Not Uploaded";
			header("location:giverprofile.php");
		}
	}
}
else
{
	header("location:giverlogin.php");
}
?>