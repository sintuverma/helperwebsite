<?php
include 'connection.php';
session_start();
if(isset($_POST['submit']))
{
    
      $guserfullname =mysqli_real_escape_string($conn,$_POST['guserfullname']) ;
      $serviceProviding =mysqli_real_escape_string($conn,$_POST['serviceProviding']) ;
      $gemail =mysqli_real_escape_string($conn,$_POST['gemail']) ;
      $gmobileNumber =mysqli_real_escape_string($conn,$_POST['gmobileNumber']) ;
      $gaddress =mysqli_real_escape_string($conn,$_POST['gaddress']) ;
      $gpassword =mysqli_real_escape_string($conn,$_POST['gpassword']) ;
      $cpassword =mysqli_real_escape_string($conn,$_POST['cpassword']) ;


        if($gpassword!==$cpassword)
        {
              $_SESSION['cperror'] = "Password And Confirm Password Not Matched.";
              //echo $_SESSION['cperror'];
              //die();
              header("location:giverRegistration.php");
        }
        else
        {
            $encp = md5($gpassword);
            $check = "select gemail from giverregistration where gemail = '$gemail'";
            //echo $check;
            //die();
            $result = mysqli_query($conn,$check);
             if(mysqli_num_rows($result)>0)
             {
              $_SESSION['email_already']= "Email is Already Exist. Enter Other Email";
              //echo $_SESSION['email_already'];
              //die();
              header("location:giverRegistration.php");
             }
             else
             {
                 //echo $encp;
                $gsql = "insert into giverregistration (guserfullname,serviceProviding, gemail,gmobileNumber,gaddress, gpassword,gstatus,gimage) values('$guserfullname','$serviceProviding','$gemail','$gmobileNumber','$gaddress','$encp','1','avatar.png')";
                //echo $gsql;
                //die();
                $gquery = mysqli_query($conn,$gsql);

                 if($gquery)
                 {
                  $_SESSION['successfully']= "Your Registration is successful. Login Here ";
                    header("location:giverlogin.php");
                 }

                 else
                 {
                  $_SESSION['error']= " Sorry Your Registration is not successful";
                  header("location:seekerRegistration.php");
                 }
              }
        }     
}
?>
