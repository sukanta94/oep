<?php
session_start();

    include("../dbconn.php");
    include("functions.php");
 
    $user_data = check_login($con);
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
            <div class="uname">
                <span><?php echo $user_data['sname']; ?></span>
            </div>
        </div>
    </div>
    <div class="sidenav" id="sidenavpanel">
        <a href="profile.php" id="profile">Profile</a>
        <a href="exam.php" id="exam">Take Exam</a>
        <a href="results.php" id="results">Results</a>
        <a href="logout.php" id="logout">Logout</a>
    </div>

</body>
</html>