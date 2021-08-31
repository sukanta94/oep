<?php
session_start();

    include("../dbconn.php");
    include("functions.php");
 
   // $user_data = check_login($con);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css"/>
    <link rel="stylesheet" type="text/css" href="../style/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="main">
        <div class="navbar">
          <img src="../logo.png">&nbsp
          <span> KARIMGANJ COLLEGE</span><br>&nbsp
          <span class="logo">Online Examination Portal</span>
          <!---<div class="uname"><?php echo $user_data['sname']; ?></div>-->
        </div>

        <div id="sidenav" class="nav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="profile.php">Profile</a>
            <a href="exam.php">Take Exam</a>
            <a href="results.php">Results</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>
</html>