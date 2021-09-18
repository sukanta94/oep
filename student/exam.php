<?php
session_start();

    include("../dbconn.php");
    include("functions.php");
 
    $user_data = check_login($con);
    $query="select * from studentlogin where sid = '$user_data[sid]'";
    $data=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" type="text/css" href="../style/exam.css">
    <title>Examination</title>
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
         <div class="sidenav" id="sidenavpanel">
            <a href="dashboard.php" id="dashboard">Dashboard</a>
            <a href="profile.php" id="profile">Profile</a>
            <a href="results.php" id="results">Results</a>
            <a href="logout.php" id="logout">Logout</a>
        </div>
        <div class="side">
            <span><h1>EXAMINATION</h1></span>

        </div>
    </div>

</body>
</html>