<?php
session_start();

    include("../BackEnd/config.php");
    include("functions.php");
 
    $user_data = check_login($con);

    $query="select * from studentlogin where sid = '$user_data[sid]'";
    $data=mysqli_query($con,$query);
    while($row = mysqli_fetch_assoc($data)){
        $uid=$row['sid'];
        $name=$row['sname'];
        $roll=$row['sroll'];
        $email=$row['semail'];
        $phone=$row['sphone'];
        $stream=$row['sstream'];
        $course=$row['scourse'];
        $sem=$row['ssem'];
        $core=$row['score'];
        $pass2=$row['spass2'];
        $pass3=$row['spass3'];
        $gec=$row['sgec'];
        $sec=$row['ssec'];
        $aecc=$row['saecc'];
        $pic=$row['spic'];
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- Layout style -->
    <link rel="shortcut icon" href="asssets/images/favicon.ico" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  </head>
  <style type="text/css">
      .container{
        position: relative;
        display: flex;
      }
       .left{
           position: relative;
           display: flex;
           flex-direction: column;
           margin-right: 70px;
       }
       h1{
           text-decoration: underline;
       }
       .right{
           position: relative;
           display: flex;
           flex-direction: column;
           align-items: center;
           margin: 50px 50px;
           padding: 50px 50px;
       }
  </style>

<body class="header-fixed">
    <!-- partial:partials/_header.html -->
    <nav class="t-header">
      <div class="t-header-brand-wrapper">
        <img class="logo" src="logo.png" >
      </div>
         
      </div>
    </nav>
    <!-- partial -->
    <div class="page-body">
      <!-- partial:partials/_sidebar.html -->
      <div class="sidebar">
        <div class="user-profile">
          <div class="display-avatar animated-avatar">
            <img class="profile-img img-lg rounded-circle" src="<?php echo $user_data['spic']; ?>" alt="profile image">
          </div>
          <div class="info-wrapper">
            <p class="user-name"><?php echo $user_data['sname']; ?></p>
            <h6 class="display-semester"><?php echo $user_data['ssem'];?> SEMESTER</h6>
          </div>
        </div>
        <ul class="navigation-menu">
          <li class="nav-category-divider">MAIN</li>
          <li>
            <a href="dashboard.php">
              <span class="link-title">Dashboard</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
          </li>
          <li>
            <a href="give_exam.php" aria-expanded="false">
              <span class="link-title">Exams</span>
              <i class="mdi mdi-flask link-icon"></i>
            </a>
          </li>
          <li>
            <a href="result.php" aria-expanded="false">
              <span class="link-title">Results</span>
              <i class="mdi mdi-bullseye link-icon"></i>
            </a>
          <li class="nav-category-divider">EDIT</li>
          <li>
            <a href="profile.php">
              <span class="link-title">Profile</span>
              <i class="mdi mdi-asterisk link-icon"></i>
            </a>
          </li>
          <li>
            <a href="slogout.php">
              <span class="link-title">Sign Out   </span>
              <i class="mdi mdi-asterisk link-icon"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- partial -->
      <div class="page-content-wrapper">
        <div class="container">
        <div class="left">
            <span><h1>PROFILE</h1></span><br><br>
            <div class='table-responsive table-bordered table-striped'>
                <table class='table'>
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
                       echo "<td><b>CORE/DSE/CORE1/DSC1/DSE1</b></td>";
                       echo "<td>$core</td>";
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
            </div><br>
                <button onclick="window.location.href='details.php'" class="btn btn-outline-dark btn-rounded">Update Details</button><br>
                <button onclick="window.location.href='uppass.php'" class="btn btn-outline-warning btn-rounded">Update Password</button>
        </div>
        <div class="right">            
                  <?php 
                        echo "<img src='".$pic."' style='width:200px;height:200px;'>";
                  ?><br>                
                <button onclick="window.location.href='image.php'" class="btn btn-outline-success btn-rounded">Update Profile Picture</button>            
        </div>
    </div>
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="row">
            <div class="col-sm-6 text-center text-sm-right order-sm-1">
              <ul class="text-gray">
                <li><small><a href="#">Session: 2020-2021</a></small></li>
                <li><small><a href="#">Group C Project</a></small></li>
              </ul>
            </div>
            <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
              <small class="text-muted d-block">BCA 6th Semester</small>
              <small class="text-gray mt-2">Handcrafted With <i class="mdi mdi-heart text-danger"></i></small>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- page content ends -->
    </div>
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="assets/vendors/js/core.js"></script>
    <!-- endinject -->
    <!-- build:js -->
    <script src="assets/js/template.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <!-- endbuild -->
  </body>
</html>