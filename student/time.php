<?php
require_once "../BackEnd/config.php";
include("functions.php");
session_start();
 $user_data = check_login($con);
 $sid=$user_data['sid'];
 $sem=$user_data['ssem'];
 $course=$user_data['scourse'];
 $core=$user_data['score'];


$eid=$_GET['examid'];
$time=$_GET['min'];

$q=mysqli_query($con,"SELECT * FROM `time` WHERE `eid` = '$eid' AND `sid` = '$sid'");
if($nos=mysqli_num_rows($q)==0)
{
    if(mysqli_query($con, "INSERT INTO `time` (`eid`, `sid`) VALUES ('$eid', '$sid')"))
    {
    header("location:question_paper.php?examid=$eid&min=$time");
    }

}else
{
    header("location:question_paper.php?examid=$eid&min=$time");
}

?>