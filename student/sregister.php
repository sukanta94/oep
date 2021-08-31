<?php
session_start();

   include("../dbconn.php");
   include("functions.php");

   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
      $name=$_POST['sname'];
      $roll=$_POST['srollno'];
      $mail=$_POST['semail'];
      $pno=$_POST['sphone'];
      $course=$_POST['scourse'];
      $sem=$_POST['ssem'];
      $pass=$_POST['spassword'];

      if(!empty($name) && !empty($roll) && !empty($mail) && !empty($pno) && !empty($course) && !empty($sem) && !empty($pass))
      {
         $sid = random_num(6);
         $query="insert into studentlogin (sid,sname,sroll,semail,sphone,scourse,ssem,spassword) values ('$sid','$name','$roll','$mail','$pno','$course','$sem','$pass')";
         mysqli_query($con,$query);

         $to = $mail;
         $subject = "Unique id";
         
         $message = $name." your Unique id is ".$sid;
         
         $header = "From:oeptest789@gmail.com";
         
         mail($to,$subject,$message,$header);

         echo "<script>alert('You will receive your Unique id by email which will be required to Login');window.location.href='userlogin.php';</script>";
      }
      else
      {
         echo "Please enter some valid information";
      }
   }
?>