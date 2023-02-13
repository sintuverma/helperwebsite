<?php
session_start();
include "connection.php";
 $email = $_POST['email'];
 $password = $_POST['password'];
 $encp = md5($password);

if(isset($_POST['submit']))
{
        
        $gsql = "select gr_id, guserfullname,serviceProviding, gemail  from giverregistration  where gemail ='$email' and gpassword = '$encp' and gstatus = 1 ";
//$sql = "select * from user ";
        //die("login page");
        $gquery = mysqli_query($conn,$gsql) or die("query is failed");



        if(mysqli_num_rows($gquery)>0)
            {
                while($grow=mysqli_fetch_assoc($gquery))
                {
                    //print_r($grow);
                    //die();
                    $_SESSION['gr_id'] = $grow['gr_id'];
                    $_SESSION['guserfullname']= $grow['guserfullname'];
                    $_SESSION['gemail']= $grow['gemail'];
                    $_SESSION['serviceProviding']= $grow['serviceProviding'];
                }
                  header("location:user/giverDashboard.php");
        
            }
        else
        {
            $_SESSION['login_error'] = "Your Email or Password Error!";
            //$error = $_SESSION['login_error'];
            header("location:giverlogin.php");

        }
}            
else
{
    header("location:giverlogin.php");
}
// table join karke hi login hoga
//SELECT Customers.CustomerName, Orders.OrderID FROM Customers CROSS JOIN Orders WHERE Customers.CustomerID=Orders.CustomerID;

?>