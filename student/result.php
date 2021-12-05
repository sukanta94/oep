<?php
session_start();
include("../BackEnd/config.php");
include("functions.php");

 $user_data = check_login($con);
 $uid=$user_data['sid'];

 $qry=mysqli_query($con,"SELECT * FROM `ans_set` WHERE `s_id` = '$uid' AND `publish`=1 "); 
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Result</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- Layout style -->
    <link rel="shortcut icon" href="asssets/images/favicon.ico" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  </head>
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
        <div class="page-content-wrapper-inner">
          <div class="content-viewport">
            <div class="row">
              <div class="col-12 py-5">
                <h2><u>Result</u></h2>                
              </div>
            </div>
            
          </div>
        </div>

        <!-- content viewport ends -->
        <div class='table-responsive table-striped'>
                <table class='table'>
                  <thead>
                    <tr>
                      <th scope='col'>No.</th>
                      <th scope='col'>Paper Name</th>
                      <th scope='col'>Paper No.</th>
                      <th scope='col'>Full Mark</th>
                      <th scope='col'>Pass Mark</th>
                      <th scope='col'>Obtained Mark</th>
                    </tr>
                  </thead>
        <?php $i=1;
            while($row=mysqli_fetch_assoc($qry)){
              $exm_name=$row['qs'];
              $exm_id=$row['e_id'];              
              $omark=$row['marks'];
              $fmark=$row['f_mark'];
              $pmark=$row['p_mark'];
              $sname=$row['s_name'];
              ?>


                  <tbody>
                    <tr>
                      <th scope='row'><?=$i?></th>
                      <td><?=$exm_name?></td>
                      <td><?=$exm_id?></td>
                      <td><?=$fmark?></td>
                      <td><?=$pmark?></td>
                      <td><?=$omark?></td>
                    </tr>
                    <?php      $i++;   
     }
             
         ?>

         </tbody>
        </table><br>                
      </div>
      <div class="d-flex justify-content-center"> 
         <button type="submit" class="btn btn-outline-link bg-warning" id="pdf" name="generate_pdf" onclick="location.href='onloadreslt.php'"> Download PDF </button>
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