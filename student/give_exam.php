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


$q="SELECT * FROM `q_set` WHERE `sem` LIKE '$sem' AND `course` LIKE '$course' AND `t_dept` LIKE '$core' AND `status` = 1 ";

$qry=mysqli_query($con,$q);

$n=mysqli_num_rows($qry);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Give Exam</title>
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
    <script type = "text/javascript" >  
    function preventBack() 
    { 
      window.history.forward(); 
    }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { 
      null
       };  
    </script>
  </head>

<body class="header-fixed">
    <!-- partial:partials/_header.html -->
    <nav class="t-header">
      <div class="t-header-brand-wrapper">
        <img class="logo" src="logo.png" >
      </div>
         
      </div>
      <ul class="page-breadcrumb breadcrumb">Give Exam</ul>
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
          <div class="card py-4">
            <div class="card-header" >
          <h3 style="color: red;">General Instructions</h3>
          </div>
              <div class="card-body bg-grey px-5 " style="border-bottom: red 2px solid">
                <div class="font-weight-bolder">
                1. A candidate shall not help or try to help any other candidate nor try to be helped by any other candidate or any other person during the hours of Examination.<br>
                2. A candidate must observe strictly the rules laid down by the University for conduct of Examination.<br>
                3. Any attempt to use unfair means in any form in connection with the examination will render him/her liable to be reported against or expulsion by the officer-in-Charge from the Examination or any part thereof and to such other penalties as the University authority may decide.
                </div>
            </div></div>
    <div class='table-responsive table-striped'>
                <table class='table bg-dark' >
                  <thead>
                    <tr>
                      <th scope='col'>#</th>
                      <th scope='col'>Papers No.</th>
                      <th scope='col'>Paper Name</th>
                      <th scope='col'>Time (in minutes)</th>
                      <th scope='col'>Status</th>
                      <th scope='col'>Actions</th>
                    </tr>
                  </thead>

<?php
    
if($qry){
    $nos=0;
while($res=mysqli_fetch_assoc($qry))
    { $nos++;
        $eid=$res["e_id"];
        $time=$res['e_duration'];
        $tknchk="SELECT * FROM `ans_set` WHERE `e_id` = '$eid' AND `s_id` = '$sid' AND `status` = 1"; //checking ans_set see if he given the exam
        $tknqry=mysqli_query($con,$tknchk);
        $numr=mysqli_num_rows($tknqry);
            if($numr>0)
                {
                    $status=1;
                }
                else
                {
                    $status=0;
                }
    //header('location:view_questions.php?examid='.urldecode($eid));
    ?>
    
                  <tbody>
                    <tr>
                      <th scope='row'><?=$nos?></th>
                      <td><?=$eid?></td>
                      <td><?php echo $res['e_name']; ?></td>
                      <td><?=$time?></td>
                      <td><?php if($status==1)
                                    {
                                      echo " &nbsp  EXAM TAKEN"; 
                                    }
                                    else
                                    {
                                       echo "  &nbsp  GIVE EXAM";
                                     } ?></td>
                      <td><button type="button" class="btn btn-danger btn-rounded" onclick="location.href='time.php?examid=<?php echo $eid; ?>&min=<?=$time;?>'"<?php 
                      if($status==1){ echo "disabled";}
                      else{ echo "";} ?>>Take Exam</button>
                      </tr>
                  
    
    <?php

        }
    }
else 
    {
    echo "No paper Found";
    } 


?>
</tbody>
</table>                
</div>
</div>
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