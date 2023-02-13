<?php
session_start();
include "connection.php";
 $email = $_POST['email'];
 $password = $_POST['password'];
 $encp = md5($password);

if(isset($_POST['submit']))
{
            $ssql = "select sr_id, suserfullname  from seekerregistration where semail ='$email' and spassword = '$encp' and sstatus = 1";
            echo $ssql;
            
        //$sql = "select * from user ";
            $squery = mysqli_query($conn,$ssql) or die("query is failed");

            if(mysqli_num_rows($squery)>0)
            {
                while($srow=mysqli_fetch_assoc($squery))
                {
                    //print_r($srow);
                    //die();  
                $_SESSION['sr_id'] = $srow['sr_id'];
                $_SESSION['suserfullname'] = $srow['suserfullname'];

                } 
                header("location:user/seekerDashboard.php");
                
            }
            else
            {
                $_SESSION['login_error'] = "Your Email or Password Error!";
                //$error = $_SESSION['login_error'];
                header("location:seekerlogin.php");
            }
}
?>