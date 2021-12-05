<?php
session_start();

require_once "../BackEnd/config.php";
   include("functions.php");

   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
      $name=$_POST['sname'];
      $roll=$_POST['srollno'];
      $mail=$_POST['semail'];
      $pno=$_POST['sphone'];
      $stream=$_POST['sstream'];
      $sem=$_POST['ssem'];
      $core=$_POST['score'];
      $gec=$_POST['sgec'];
      $sec=$_POST['ssec'];
      $aecc=$_POST['saecc'];
      $file=$_FILES['spic']['name'];
      $tempname=$_FILES['spic']['tmp_name'];
      $folder="picture/.$file";
      $pass=$_POST['spassword'];

      move_uploaded_file($tempname,$folder);

      if(!empty($name) && !empty($roll) && !empty($mail) && !empty($pno) && !empty($stream) && !empty($sem) && !empty($core) && !empty($pass))
      {

        //function to generate random unique id
         $sid = mt_rand(1000,999999);
         
         $course = "Hons";
         $var = 0;
         $query="insert into studentlogin (sid,sname,sroll,semail,sphone,sstream,scourse,ssem,score,sgec,ssec,saecc,spic,spassword,status) values ('$sid','$name','$roll','$mail','$pno','$stream','$course','$sem','$core',if('$gec' = '', NULL, '$gec'),if('$sec' = '', NULL, '$sec'),if('$aecc' = '', NULL, '$aecc'),'$folder','$pass','$var')";
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