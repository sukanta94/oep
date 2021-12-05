<?php
include "../BackEnd/config.php";
include("functions.php");
session_start();
 $user_data = check_login($con);
 $sid=$user_data['sid'];
 $sem=$user_data['ssem'];
 $course=$user_data['scourse'];
 $core=$user_data['score'];

 $status=0;
$give=0;

$q="SELECT * FROM `q_set` WHERE `sem` LIKE '$sem' AND `course` LIKE '$course' AND `t_dept` LIKE '$core' AND `status` = 1 ";

$qry=mysqli_query($con,$q);

$n=mysqli_num_rows($qry);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
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
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  </head>
  <body class="header-fixed" style="background-color: lightblue;">
    <!-- partial:partials/_header.html -->
    <nav class="t-header">
      <div class="t-header-brand-wrapper mt-3">
        <img class="logo" src="logo.png" >
      </div>
      <ul class="page-breadcrumb breadcrumb">Dashboard</ul>
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
                <h4>Dashboard</h4>
                <?php
    
if($qry){
while($res=mysqli_fetch_assoc($qry))
    {
        $eid=$res["e_id"];
        $time=$res['e_duration'];
        $tknchk="SELECT * FROM `ans_set` WHERE `e_id` = '$eid' AND `s_id` = '$sid' AND `status` = 1"; //checking ans_set see if he given the exam
        $tknqry=mysqli_query($con,$tknchk);
        $numr=mysqli_num_rows($tknqry);
            if($numr>0)
                {
                    $status+=1;
                }
                else
                {
                    $give+=1;
                }
    
       if($status==1)
             {
               echo ""; 
             }
             else
             {
                echo "";
              } 

        }
    }
else 
    {
    echo "No paper Found";
    } 


?>
              </div>
            </div>
            <div class="portlet light profile-sidebar-portlet bordered">
                <!-- SIDEBAR USERPIC -->
                <div class="container-fluid py-4">
            <div class="row col-md-10 mb-4 p-7">
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body py-8 mx-4">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers text-center">
                                        <p class="text-sm mb-0 text-capitalize text-center font-weight-bold">Total Exams Appeared</p>
                                        <h5 class="font-weight-bolder text-center text-info mb-0 mt-2">
                                          <?php
                                        echo $status;
                                        ?>    
                                            <span class="text-success text-sm font-weight-bolder"></span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-money text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body py-8 mx-4">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm  mb-0 text-center text-capitalize font-weight-bold">Total Exams To Appear</p>
                                        <h5 class="font-weight-bolder text-center text-success mb-0 mt-2">
                                          <?php
                                        echo $give;
                                        ?>   
                                            <span class="text-success text-sm font-weight-bolder"></span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 m-6">
                    <div class="card">
                        <div class="card-body p-8 mx-4">
                            <div class="row">
                                <div class="col-16">
                                    
                                        <img src="<?php echo $user_data['spic']; ?> " width="200" height="200" class="img-responsive" alt="">
                                        <h6 class="text-center text-success mb-0 mt-2">
                                          <?php echo $user_data['sname']; ?> 
          
                                            <span class="text-success text-sm font-weight-bolder"></span>
                                        </h5>
                                    
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            
              </div> 
          </div>
        </div>
        <!-- content viewport ends -->
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