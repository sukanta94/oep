<?php
session_start();
require_once "../../BackEnd/config.php";

    $del= $_GET['delete'];
    $dd="DELETE FROM `q_set` WHERE `nos`  = '$del' ";
    $del_query=mysqli_query($con,$dd);

    header('Location:view_papers.php');

