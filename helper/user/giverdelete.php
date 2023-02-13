<?php
session_start();
if(isset($_SESSION['gr_id']))
{
        include '../connection.php';
        if(isset($_POST['submit']))
        {
            //echo "is coming";
            //echo $id;
            $giver_id =$_POST['giver_id'];
            $dgsql  = "update giverregistration set gstatus='0' where gr_id= $giver_id";
            //echo $sql;
          ;
            $query =mysqli_query($conn,$dgsql) or die("query is failed deleted");
           
            if($query>0)
            {
                header("location:../index.php");
            }
            else
            {
                echo "cant deleted something error";
            }
        }

}
else
{
    header("location:../giverlogin.php");
}

?>