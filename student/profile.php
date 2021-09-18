<?php
session_start();

    include("../dbconn.php");
    include("functions.php");
 
    $user_data = check_login($con);

    $query="select * from studentlogin where sid = '$user_data[sid]'";
    $data=mysqli_query($con,$query);
    while($row = mysqli_fetch_array($data)){
        $uid=$row['sid'];
        $name=$row['sname'];
        $roll=$row['sroll'];
        $email=$row['semail'];
        $phone=$row['sphone'];
        $stream=$row['sstream'];
        $course=$row['scourse'];
        $sem=$row['ssem'];
        $core=$row['score'];
        $pass1=$row['spass1'];
        $pass2=$row['spass2'];
        $pass3=$row['spass3'];
        $gec=$row['sgec'];
        $sec=$row['ssec'];
        $aecc=$row['saecc'];
        $pic=$row['spic'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" type="text/css" href="../style/profile.css">
    <title>Profile</title>
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
            <a href="exam.php" id="exam">Give Exam</a>
            <a href="results.php" id="results">Results</a>
            <a href="logout.php" id="logout">Logout</a>
        </div>
        <div class="container">
        <div class="left">
            <span><h1>PROFILE</h1></span>
            <table>
                <tr>
                    <td><b>Unique Id</b></td>
                    <td><?php echo"$uid";?></td>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><?php echo"$name";?></td>
                </tr>
                <tr>
                    <td><b>Roll No</b></td>
                    <td><?php echo"$roll";?></td>
                </tr>
                <tr>
                    <td><b>Email</b></td>
                    <td><?php echo"$email";?></td>
                </tr>
                <tr>
                    <td><b>Phone</b></td>
                    <td><?php echo"$phone";?></td>
                </tr>
                <tr>
                    <td><b>Stream</b></td>
                    <td><?php echo"$stream";?></td>
                </tr>
                <tr>
                    <td><b>Course</b></td>
                    <td><?php echo"$course";?></td>
                </tr>
                <tr>
                    <td><b>Semester</b></td>
                    <td><?php echo"$sem";?></td>
                </tr>
                 <?php
                    if($core!=null){
                       echo "<tr>";
                       echo "<td><b>Core/DSE/CORE1</b></td>";
                       echo "<td>$core</td>";
                       echo "</tr>";
                   }
                 ?>
                 <?php
                    if($pass1!=null){
                       echo "<tr>";
                       echo "<td><b>DSC1/DSE1</b></td>";
                       echo "<td>$pass1</td>";
                       echo "</tr>";
                   }
                 ?>
                 <?php
                    if($pass2!=null){
                       echo "<tr>";
                       echo "<td><b>DSC2/DSE2</b></td>";
                       echo "<td>$pass2</td>";
                       echo "</tr>";
                   }
                 ?>
                 <?php
                    if($pass3!=null){
                       echo "<tr>";
                       echo "<td><b>DSC3/DSE3/Language/GE</b></td>";
                       echo "<td>$pass3</td>";
                       echo "</tr>";
                   }
                 ?>
                 <?php
                       if($gec!=null){
                       echo "<tr>";
                       echo "<td><b>GE</b></td>";
                       echo "<td>$gec</td>";
                       echo "</tr>";
                   }
                 ?>
                 <?php
                       if($sec!=null){
                       echo "<tr>";
                       echo "<td><b>SEC</b></td>";
                       echo "<td>$sec</td>";
                       echo "</tr>";
                   }
                 ?>
                 <?php
                       if($aecc!=null){
                       echo "<tr>";
                       echo "<td><b>AECC</b></td>";
                       echo "<td>$aecc</td>";
                       echo "</tr>";
                   }
                 ?>
                </table>
                <button onclick="window.location.href='details.php'" class="upd">Update Details</button>
                <button onclick="window.location.href='uppass.php'" class="password">Update Password</button>
        </div>
        <div class="right">            
                  <?php 
                        echo "<img src='".$pic."' style='width:200px;height:200px;'>";
                  ?>                
                <button onclick="window.location.href='image.php'" class="pimage">Update Profile Picture</button>            
        </div>
    </div>
   
</body>
</html>