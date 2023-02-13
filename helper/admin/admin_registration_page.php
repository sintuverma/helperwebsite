<?php
session_start();
include 'connection.php';
if(isset($_POST['submit']))
{
    
      $admin_name =mysqli_real_escape_string($conn,$_POST['admin_name']) ;
      $admin_email =mysqli_real_escape_string($conn,$_POST['admin_email']) ;
      $admin_mobile =mysqli_real_escape_string($conn,$_POST['admin_mobile']) ;
      $admin_password =mysqli_real_escape_string($conn,$_POST['admin_password']) ;
      $reg_date =mysqli_real_escape_string($conn,$_POST['reg_date']) ;
        
            $encp = md5($admin_password);
            //echo $check;
            //die();
            $check = "select admin_email from admin_table where admin_email = '$admin_email'";
            
            $result = mysqli_query($conn,$check);
             if(mysqli_num_rows($result)>0)
             {
              $_SESSION['email_already']= "Email is Already Exist. Enter Other Email";
              //echo $_SESSION['email_already'];
             // die();
              header("location:admin_registration.php");
             }
             else
             {
                 //echo $encp;
                $asql = "insert into admin_table (admin_name,admin_email, admin_mobile,admin_password,reg_date) values('$admin_name','$admin_email','$admin_mobile','$encp','$reg_date')";
                //echo $asql;
                //die();
                $aquery = mysqli_query($conn,$asql);

                 if($aquery)
                 {
                  $_SESSION['asuccessfully']= "Your Registration is successful. Login Here ";
                    header("location:admin_login.php");
                 }

                 else
                 {
                  $_SESSION['aerror']= " Sorry Your Registration is not successful";
                  header("location:admin_registration.php");
                 }
              }    
}
?>
