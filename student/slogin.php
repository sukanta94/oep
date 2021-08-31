<?php
session_start();

    include("../dbconn.php");
    include("functions.php");
 
    if($_SERVER['REQUEST_METHOD'] == "POST")
   {
      $sid=$_POST['sid'];
      $mail=$_POST['semail'];
      $pass=$_POST['spassword'];

      if(!empty($sid) && !empty($mail) && !empty($pass))
      {
         $query="select * from studentlogin where sid = '$sid' AND semail = '$mail' limit 1";
         $result=mysqli_query($con,$query);
         if ($result) 
         {
             if($result && mysqli_num_rows($result) > 0)
             {
                 $user_data = mysqli_fetch_assoc($result);
                 if($user_data['spassword'] === $pass)
                 {
                    $_SESSION['sid']=$user_data['sid'];
                    header("Location: dashboard.php");
                    die;
                 }
             }
         }
         echo "Wrong details,Please enter some valid information";
      }
      else
      {
         echo "Wrong details,Please enter some valid information";
      }
   }
?>