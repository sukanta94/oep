<?php //total marks add remaining
session_start();
require_once "../../BackEnd/config.php";
$uid = $_SESSION['u_id'];
$eid = $_GET['eid'];
$sid = $_GET['sid'];

// $info="SELECT * FROM `s_registered` WHERE `s_rollno` = $sid";
// $iqry=mysqli_query($con,$info);
// $s=mysqli_fetch_assoc($iqry);
// $name= $s['s_name'];
// $dpt= $s['s_dept'];
// $sem= $s['s_sem'];
// $course= $s['course'];

$q = "SELECT * FROM `s_answers` WHERE `s_unique_id` = '$sid' AND `e_id` = '$eid' "; //getting answers
$p = mysqli_query($con, $q);
$mark=0;
while($mrk=mysqli_fetch_assoc($p))
{
    $mark += $mrk['marks']; 
}
$tmark=$mark;

$mins="UPDATE `ans_set` SET `marks` = '$tmark', `ck` = '1' ,`t_id` = '$uid' WHERE `s_id` = '$sid' AND `e_id` = '$eid'  ";
$minsqry=mysqli_query($con,$mins);

if($minsqry)
{
    echo  '<script type="text/javascript">
    window.history.go(-2);
    </script>' ;
}