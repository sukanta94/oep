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
            <a href="exam.php" id="exam">Take Exam</a>
            <a href="results.php" id="results">Results</a>
            <a href="logout.php" id="logout">Logout</a>
        </div>
        
        <span><h1>PROFILE</h1></span>
        <table>
            <tr>
                <th>Name</th>
                <th>Roll no</th>
                <th>Email</th>
                <th>Phone no</th>
                <th>Course</th>
                <th>Semester</th>
            </tr>
        <?php
        $query="select * from studentlogin where sid = '$user_data[sid]' ";
        $data=mysqli_query($con,$query);
        $total=mysqli_num_rows($data);

       if($total!=0)
       {
           while($result=mysqli_fetch_assoc($data))
           {
           echo "<tr>            
                    <td>".$result['sname']."</td>
                    <td>".$result['sroll']."</td>
                    <td>".$result['semail']."</td>
                    <td>".$result['sphone']."</td>
                    <td>".$result['scourse']."</td>
                    <td>".$result['ssem']."</td>
                </tr>";
           }
       }
       else
       {
           echo "No Records found";
       }

       ?>
       </table>
       <div class="btn">
           <button onclick="window.location.href='updetails.php'">Update Details</button>
           <button onclick="window.location.href='uppass.php'">Update Password</button>
       </div>
   
</body>
</html>