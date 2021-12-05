<?php
require_once "../../BackEnd/config.php";
if ($con) {
    $flag = 0;
    if (count($_POST) > 0) {
        $name = $_POST['t_name'];
        $uid = $_POST['u_id'];
        $email = $_POST['t_email'];
        $pass = $_POST['t_pass'];
        $dept = $_POST['dept'];
        $runo = "SELECT * FROM `t_registered` WHERE `t_email` = '$email' ";
        $ss = mysqli_query($con, $runo);
        $d = mysqli_num_rows($ss);
        if ($d > 0) {
            $flag = 1;
        } else {
            $sql = "INSERT INTO `t_registered` (`unique_id`, `t_pass`, `t_name`, `t_email`, `t_dept`) 
        VALUES ('$uid', '$pass', '$name', '$email', '$dept')";

            if (mysqli_query($con, $sql)) {
                header("location: login.php");
            } else {
                echo "fail";
            }
        }
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <title>
       Teacher Registration
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
    <!-- container -->
    <section class="min-vh-120 mb-8">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-12 m-3 border-radius-lg" 
        style="background-image: url('../../assets/img/curved-images/curved14.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center mx-auto">
                        <h1 class="text-white mb-3 mt-6">Welcome!</h1>
                        <p class="text-lead text-white">Please Provide Correct Information To Register as Teacher</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                <div class="col-xl-4 col-lg-5 col-md-6 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-5">
                            <h5>Register Here</h5>
                        </div>
                        <div class="card-body">
                            <!-- form making-->
                            <form role="form text-left" action="" method="POST">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="t_name" placeholder="Full Name" aria-label="Name" aria-describedby="text-addon">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="u_id" placeholder="Unique ID" aria-label="Name" aria-describedby="text-addon">
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="t_email" class="form-control" placeholder="Email ID" aria-label="Email" aria-describedby="email-addon">
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="t_pass" class="form-control" placeholder="Create Password" aria-label="Password" aria-describedby="password-addon">
                                </div>
                                <div class="mb-3">
                                    <select name="dept" id="department" class="form-control" placeholder="Select Department" aria-label="Name" aria-describedby="selection-addon">
                                        <option hidden disabled selected value>Select Course</option>
                                        <option value="alteng">Alternative English</option>
                                        <option value="arab">Arabic</option>
                                        <option value="bngc">Bengali</option>
                                        <option value="bng">Bengali Communication</option>
                                        <option value="bio">Biology</option>
                                        <option value="botbio">Botany &amp; Biotechnology</option>
                                        <option value="chem">Chemistry</option>
                                        <option value="cmrc">Commerce</option>
                                        <option value="comp">Computer Science &amp; Application</option>
                                        <option value="ecoenv">Ecology &amp; Environmental Science</option>
                                        <option value="eco">Economics</option>
                                        <option value="engc">English</option>
                                        <option value="eng">English Communication</option>
                                        <option value="geneng">General English</option>
                                        <option value="geo">Geology</option>
                                        <option value="hist">History</option>
                                        <option value="math">Mathematics</option>
                                        <option value="mil">MIL</option>
                                        <option value="phil">Philosophy</option>
                                        <option value="phy">Physics</option>
                                        <option value="polsc">Political Science</option>
                                        <option value="snsk">Sanskrit</option>
                                        <option value="stat">Statistics</option>
                                        <option value="zoo">Zoology</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">Already have an account? <a href="login.php" class="text-dark font-weight-bolder">Sign in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4 mx-auto text-center">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Company
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        About Us
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Team
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Products
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Blog
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Pricing
                    </a>
                </div>
                <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-dribbble"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-twitter"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-instagram"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-pinterest"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-github"></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        Copyright © <script>
                            document.write(new Date().getFullYear())
                        </script> Soft by Creative Tim.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>