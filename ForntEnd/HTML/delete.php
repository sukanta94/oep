<?php
session_start();
require_once "../../BackEnd/config.php";
$eid = $_GET['eid'];
$ename = $_GET['e_name'];
echo $ename;
$fmark = $_GET['f_mark'];
$pmark = $_GET['p_mark'];
$dept = $_GET['t_dept'];
$time = $_GET['e_duration'];

    $del= $_GET['delete'];
    $dd="DELETE FROM `qs` WHERE `qs`.`nos` = '$del' ";
    $del_query=mysqli_query($con,$dd);

    header('Location:view_questions.php?examid='. urldecode($eid)."&e_name=".urldecode($ename)."&f_mark=".
    urldecode($fmark)."&p_mark=".urldecode($pmark)."&t_dept=".urldecode($dept)."&e_duration=".urldecode($time));

?>