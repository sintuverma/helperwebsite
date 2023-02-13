<?php
include 'connection.php';
session_start();
if(isset($_POST['submit']))
{    
      $suserfullname =mysqli_real_escape_string($conn,$_POST['suserfullname']) ;
      $semail =mysqli_real_escape_string($conn,$_POST['semail']) ;
      $smobileNumber =mysqli_real_escape_string($conn,$_POST['smobileNumber']) ;
      $saddress =mysqli_real_escape_string($conn,$_POST['saddress']) ;
      $spassword =mysqli_real_escape_string($conn,$_POST['spassword']) ;
      $cpassword =mysqli_real_escape_string($conn,$_POST['cpassword']) ;


        if($spassword!==$cpassword)
        {
             $_SESSION['perror'] = "Password And Confirm Password Not Matched.";
            header("location:seekerRegistration.php");
        }
        else
        {
            $encp = md5($spassword);
            $check = "select semail from seekerregistration where semail = '$semail'";
            //echo $check;
            //die();
            $result = mysqli_query($conn,$check);
             if(mysqli_num_rows($result)>0)
             {
              $_SESSION['email_already']= "Email is Already Exist. Enter Other Email";
              //echo $_SESSION['email_already'];
              //die();
              header("location:seekerRegistration.php");
             }
             else
             {
                 //echo $encp;
                $sql = "insert into seekerregistration (suserfullname, semail,smobileNumber,saddress, spassword,sstatus) values('$suserfullname','$semail','$smobileNumber','$saddress','$encp',1)";
                $query = mysqli_query($conn,$sql);

                 if($query)
                 {
                  $_SESSION['successfully']= "Your Registration is successful. Login Here ";
                    header("location:seekerlogin.php");
                 }

                 else
                 {
                  $_SESSION['error']= " Sorry Your Registration is not successful";
                  header("location:seekerRegistration.php");
                 }
              }
        }     
    }
    elseif (isset($_POST['gsubmit'])) 
    {
echo "gsubmit";
die();
        $giver=$_POST['giver'];
        echo $giver;
        die();
      $suserfullname =mysqli_real_escape_string($conn,$_POST['suserfullname']) ;
      $semail =mysqli_real_escape_string($conn,$_POST['semail']) ;
      $smobileNumber =mysqli_real_escape_string($conn,$_POST['smobileNumber']) ;
      $saddress =mysqli_real_escape_string($conn,$_POST['saddress']) ;
      $spassword =mysqli_real_escape_string($conn,$_POST['spassword']) ;
      $cpassword =mysqli_real_escape_string($conn,$_POST['cpassword']) ;


        if($spassword!==$cpassword)
        {
             $_SESSION['perror'] = "Password And Confirm Password Not Matched.";
            header("location:seekerRegistration.php");
        }
        else
        {
            $encp = md5($spassword);
            $check = "select semail from seekerregistration where semail = '$semail'";
            //echo $check;
            //die();
            $result = mysqli_query($conn,$check);
             if(mysqli_num_rows($result)>0)
             {
              $_SESSION['email_already']= "Email is Already Exist. Enter Other Email";
              //echo $_SESSION['email_already'];
              //die();
              header("location:seekerRegistration.php");
             }
             else
             {
                 //echo $encp;
                $gsql = "insert into seekerregistration (guserfullname, gemail,gmobileNumber,gaddress, gpassword,gstatus) values('$guserfullname','$gemail','$gmobileNumber','$gaddress','$encp',1)";
                $gquery = mysqli_query($conn,$gsql);

                 if($gquery)
                 {
                  $_SESSION['successfully']= "Your Registration is successful. Login Here ";
                    header("location:login.php");
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
