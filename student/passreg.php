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
      $stream=$_POST['sstream'];
      $sem=$_POST['ssem'];
      $pass1=$_POST['spass1'];
      $pass2=$_POST['spass2'];
      $pass3=$_POST['spass3'];
      $sec=$_POST['ssec'];
      $aecc=$_POST['saecc'];
      $file=$_FILES['spic']['name'];
      $tempname=$_FILES['spic']['tmp_name'];
      $folder="image/.$file";
      $pass=$_POST['spassword'];

      move_uploaded_file($tempname,$folder);

      if(!empty($name) && !empty($roll) && !empty($mail) && !empty($pno) && !empty($stream) && !empty($sem) && !empty($pass1) && !empty($pass2) && !empty($pass))
      {
         $sid = random_num(6);
         $course = "PASS";
         $var = 0;
         $query="insert into studentlogin (sid,sname,sroll,semail,sphone,sstream,scourse,ssem,spass1,spass2,spass3,ssec,saecc,spic,spassword,status) values ('$sid','$name','$roll','$mail','$pno','$stream','$course','$sem','$pass1','$pass2',if('$pass3' = '', NULL, '$pass3'),if('$sec' = '', NULL, '$sec'),if('$aecc' = '', NULL, '$aecc'),'$folder','$pass','$var')";
         mysqli_query($con,$query);

         $to = $mail;
         $subject = "Unique id";
         $message = $name." your Unique id is ".$sid; 
         $header = "From:oeptest789@gmail.com";
         
         mail($to,$subject,$message,$header);

         echo "<script>alert('You will receive your Unique id by email which will be required to Login');window.location.href='login.html';</script>";
      }
      else
      {
         echo "Please enter some valid information";
      }
   }
?>