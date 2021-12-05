<?php //viewing all questions of a paaper dynamically AND ans portion not needed
session_start();
require_once "../BackEnd/config.php";
include("functions.php");
$user_data = check_login($con);

$eid = $_GET['examid'];
//get exam duration
$m=$_GET['min'];
$duration=$m*60*1000;//duration in minutes

$sid=$user_data['sid'];
$sroll=$user_data['sroll'];
$sname=$user_data['sname'];

$qst=mysqli_query($con,"SELECT * FROM `q_set` WHERE `e_id` = '$eid'");

$exmdtls=mysqli_fetch_assoc($qst);
$fm=$exmdtls['f_mark'];
$pm=$exmdtls['p_mark'];

//Exam start time by student
$t=mysqli_query($con,"SELECT * FROM `time` WHERE `eid` = '$eid' AND `sid` = '$sid'");
$ut=mysqli_fetch_assoc($t);
$date=$ut['date'];
$time=$ut['time'];
$stime=$date.' '.$time;
$smili=strtotime("$stime")*1000;
$ctime= $duration+$smili-12600000; //differece of 210 minutes

$answer="INSERT INTO `s_answers` (`s_unique_id`, `e_id`, `question`, `ca`, `q_desc`,`ans`) VALUES (?,?,?,?,?,?)";
$stmt= $con->prepare($answer);

$stmt->bind_param("ssssss", $sid, $eid, $qsn, $ans, $qdes, $dsa);

if (isset($_POST['sub'])) {

    $n = $_POST['n'];

    for ($i = 1; $i < $n; $i++) { 
         //data Insertion
        if(isset($_POST[$i ."ans"])){
        $ans = $_POST[$i ."ans"];//answer insert
        }
        else{
            $ans="";
        }
        $qsn=$_POST[$i . "qsn"];//question no. insert
            
        $qdes=$_POST[$i . "qdes"];//question insert

        if($_POST[$i ."dsans"])
        {
        $dsa=$_POST[$i ."dsans"];//descritive ans insert
        }
        else
        {
            $dsa="";
        }
        $qsd=$stmt->execute();

    }if($qsd)
    {
       
        header('location:mchk.php?examid='.urldecode($eid));
    }
    else{
        die(mysqli_error($con));
        echo "already taken";
        }
}

$q = "SELECT * FROM `qs` WHERE `e_id` = '$eid' ";
$p = mysqli_query($con, $q);
$nos=mysqli_num_rows($p);
if ($p) {
    $num = mysqli_num_rows($p);
    if ($num) {
?>
        <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Set question</title>
    <!-- plugins:css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
    <link rel="stylesheet" type="text/css" href="style/profile.css">
  </head>

<body class="header-fixed">
    
    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
    <!-- partial --><p id="demo"> TIME </p>
            <p id="days"></p>
            <p id="hours"></p>
            <p id="mins"></p>
            <p id="secs"></p>
            <h2 id="end"></h2>
            <div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="content-viewport">
        
             <div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="content-viewport">
          <div class="main-card col-md-10 card m-auto mt-3 ">
                    <div class="card-body mx-4 rounded">
                        <h5 class="card-title border-bottom border-primary col-md-2 pb-2 text-center rounded">Question Paper</h5>
                        <div class="my-4 mb-4 text-center border-bottom border-success">
                        <h1 style="text-align: center;"><?php echo $eid;?></h1>
                            </div>
                            <div class="col-md-6 m-auto text-uppercase text-secondary text-xm font-weight-bolder">
                         <div class="mb-4">

            <div class="product">
                
                <?php
                
                $i = 1;
                
                while ($f = mysqli_fetch_assoc($p)) {
                ?>
                   <form action="" method="POST" id="autosub">
                      
                    <?php 
                    if($f['oa']!=null)
                    { 
                        ?>
                    <h3> Q.<?php echo $i; ?>- <?php echo $f['question'];
                    
                    ?></h3>
                        <input type="hidden"  name="<?php echo $i . 'qsn'; ?>" value="<?php echo $f['nos'];?>">
                        <input type="hidden"  name="<?php echo $i . 'qdes'; ?>" value="<?php echo $f['question'];?>">
                          <input type="radio" name="<?php echo $i . 'ans'; ?>" value="A">
                          <label for="html"> <?php echo $f['oa']; ?></label><br>
                          <input type="radio" name="<?php echo $i . 'ans'; ?>" value="B">
                          <label for="css"><?php echo $f['ob']; ?></label><br>
                          <input type="radio" name="<?php echo $i . 'ans'; ?>" value="C">
                          <label for="javascript"><?php echo $f['oc']; ?></label><br>
                          <input type="radio"  name="<?php echo $i . 'ans'; ?>" value="D">
                          <label for="rr"><?php echo $f['od']; ?></label>
                    <?php }
                    else
                        {
                        ?>
                        <h3> Q.<?php echo $i; ?>- <?php echo $f['question']; ?></h3>

                        <input type="hidden"  name="<?php echo $i . 'qdes'; ?>" value="<?php echo $f['question'];?>">
                        <input type="hidden"  name="<?php echo $i . 'qsn'; ?>" value="<?php echo $f['nos'];?>">
                        <h2 style="font-size: 20px"><input type="textarea" onpaste="return false;" ondrop="return false;" autocomplete="off" name="<?php echo $i . 'dsans'; ?>" placeholder="Type Answer Here"></h2>
                        <?php 
                        
                    }
                    
                    ?>
                    <?php
                    $_SESSION['ueid'] = $eid;
                    session_create_id();
                    ?>
                    <br>
                    
                <?php
                    $i++;
                    
                }
                
                ?>
                <input type="hidden" name="n" value="<?php echo $i; ?>">
                <input type="submit" name="sub" value="SUBMIT">
                
                </form>
                <?php   
            } else {
                echo "Nothing found";
                ?>

                <h2><a style="color: red;" href="make_question.php?exmid=<?php echo $eid; ?>">Nothing to See Here</a></h2>
        <?php
            }
        }
        ?>
        </div>
</div>
</div>
    
        
      </div>
      </div>
    <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="row">
            <div class="col-sm-6 text-center text-sm-right order-sm-1">
              <ul class="text-gray">
                <li><a href="#">Terms of use</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
              <small class="text-muted d-block">Copyright © 2019 <a href="#" target="_blank">UXCANDY</a>. All rights reserved</small>
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
    <script> //timer
    var countDown=<?=$ctime?>;
        var time=0;
    var myfunc = setInterval(function() {

    let now = new Date().getTime();
      
    let timeleft = countDown - now;
    
    // Calculating the days, hours, minutes and seconds left
    let days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
    let hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
        
    // Result is output to the specific element
    document.getElementById("days").innerHTML = days + "d "
    document.getElementById("hours").innerHTML = hours + "h " 
    document.getElementById("mins").innerHTML = minutes + "m " 
    document.getElementById("secs").innerHTML = seconds + "s " 
        
    // Display the message when countdown is over
    if (timeleft < 0) {
        clearInterval(myfunc);
        document.getElementById("days").innerHTML = ""
        document.getElementById("hours").innerHTML = "" 
        document.getElementById("mins").innerHTML = ""
        document.getElementById("secs").innerHTML = ""
        document.getElementById("end").innerHTML = "TIME UP!!";
        alert("TIMES UPP!!\nAnswer Sheet will Auto Submit! \nPress okk.");
          document.getElementById("sub").click();
        
        
        
    }
     }, 1000);
     
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="assets/vendors/js/core.js"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/js/charts/chartjs.addon.js"></script>
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="assets/js/template.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <!-- endbuild -->
        </body>
        </html>