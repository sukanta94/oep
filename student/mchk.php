<?php //viewing all questions of a paaper dynamically AND ans portion not needed
session_start();
require_once "../BackEnd/config.php";
//start instering in ans_set inserting 
include("functions.php");
$user_data = check_login($con);

$eid = $_GET['examid'];
$sid=$user_data['sid'];
$sroll=$user_data['sroll'];
$sname=$user_data['sname'];

$qst=mysqli_query($con,"SELECT * FROM `q_set` WHERE `e_id` = '$eid'");

$exmdtls=mysqli_fetch_assoc($qst);
$fm=$exmdtls['f_mark'];
$pm=$exmdtls['p_mark'];
$qs=$exmdtls['e_name'];

$ans_set= "INSERT INTO `ans_set` (`e_id`, `s_id`, `status`,`f_mark`, `p_mark`, `s_name`, `sroll`, `qs`) VALUES 
('$eid', '$sid', '1','$fm', '$pm', '$sname','$sroll','$qs')";//enter students input in Ans_set to checkl after submiiting

$tkn=mysqli_query($con,$ans_set);

$q = "SELECT * FROM `qs` WHERE `e_id` = '$eid' ";
$p = mysqli_query($con, $q);
$i=0;
while($f = mysqli_fetch_assoc($p))
{   
    if($f['oa']!=NULL)
    {
        //echo $f['nos'];
        $qsn=$f['nos'];
        $ans=$f['ans'];
        $sans="SELECT * FROM `s_answers` WHERE `question` = '$qsn' AND `ca` = '$ans' ORDER BY `question` ASC ";
        $squrt=mysqli_query($con,$sans);
        $val=mysqli_num_rows($squrt);
        if($val>0)
        {
            $i++;
            $m="UPDATE `s_answers` SET `marks` = '1' WHERE `s_answers`.`question` = $qsn";
            if(mysqli_query($con,$m))
            {
                header('location:dashboard.php');
            }
            
            // while($a=mysqli_fetch_assoc($squrt))
            // {
            //     echo $a['ca']."-";
            // }
        }
        else{
            header('location:dashboard.php');
            } 
    }
    else{
        header('location:dashboard.php');
    }
}

