<?php //not required
session_start();
require_once "../../BackEnd/config.php";

    $t_dept = $_SESSION['tdpt'];
    //Nav Bar User  
    $uid = $_SESSION['u_id'];
    $pinflag = 0;
    $name = 0;
    if (isset($_SESSION['u_id'])) {
        $name = 1;
        $uid = $_SESSION['u_id'];
    }
    //End of Nav bar User
if(isset($_GET['examid']))
{
$eid=$_GET['examid'];

$update="UPDATE `ans_set` SET `publish`='1' WHERE `e_id`= '$eid'";
$upqry=mysqli_query($con,$update);
if($upqry)
{
    header('location:result.php');
}else
{echo 'error';}
}