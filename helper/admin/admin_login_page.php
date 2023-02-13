<?php
session_start();
include "../connection.php";
if(isset($_POST['submit']))
{
	 $email = mysqli_real_escape_string($conn,$_POST['email']);
	 $password = mysqli_real_escape_string($conn,$_POST['password']);
     $encp = md5($password);
    //die("login page");
    $asql = "select admin_id,admin_name,admin_email,admin_mobile,admin_password from admin_table where admin_email ='$email' and admin_password = '$encp'";
    //echo $asql;
    //die("login page");
    //echo print_r($conn);
    $query = mysqli_query($conn,$asql) or die("query is failed");
    //print_r($query);


        if(mysqli_num_rows($query)>0)
        {
            while($row=mysqli_fetch_assoc($query))
            {
                //print_r($row);
                
                 $admin_id = $row['admin_id'];
                 $admin_name= $row['admin_name'];
                 $admin_email = $row['admin_email'];
                 $admin_mobile = $row['admin_mobile'];
                
            }
           
             $_SESSION['admin_id'] = $admin_id;
             $_SESSION['admin_name'] = $admin_name;
             $_SESSION['admin_email'] = $admin_email;
             $_SESSION['admin_mobile'] = $admin_mobile;
            //echo $name;
            //echo $_SESSION['username'];
            //die();
            header("location:admin_dashboard.php");
            
        }
        else
        {
             $_SESSION['alogin_error'] = "Your Email or Password Incorrect!";
            //die("login page");

            //$error = $_SESSION['login_error'];
            header("location:admin_login.php");
        }
}
?>