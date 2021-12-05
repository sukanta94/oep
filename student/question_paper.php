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

$dtl=mysqli_fetch_assoc($qst);
$fm=$dtl['f_mark'];
$pm=$dtl['p_mark'];
$sub=$dtl['e_name'];
$title=$dtl['e_title'];
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

<body class="bg-grey">
    
<div class="main-card col-md-10 card m-auto mt-3">
                    <div class="card-body mx-4">
                        <h5 class="card-title border-bottom border-primary col-md-2 pb-2 text-center">Question Paper</h5>
                        <div class="my-4 mb-4 text-center border-bottom border-success">
                            <h6 class="text-uppercase mb-1"><?=$title?></h6>
                            <h6>Subject:<?=$sub?></h6>
                            <br>
                            <div class="row g-3">
                                <div class="col-md-4">
                            <h6>Full Mark :<?=$fm?> </h6>
                            </div >
                            <div class="col-md-4">
                            <h6>  Pass Mark :<?=$fm?> </h6>
                            </div>
                            <div class="col-md-4">
                            <h6 style="color:#FF5C58">Time:<h8 id="hours"></h8> <h8 id="mins"></h8><h8 id="secs"></h8><h8 id="end"></h8></h6>
                            </div>
                            </div>
                              
                            </div>
                            <div class="col-md-6 m-auto my-4 text-lg ">
                                <div class="my-4 ">
                            <?php
                                  $i = 1;
                                while ($f = mysqli_fetch_assoc($p)) {
                                              ?>
                              
                                <form action="" method="POST" id="autosub" class="pt-2 ">
                                
                                <div class="mt-1 pb-3 border-bottom border-secondary">
                                        <?php 
                                    if($f['oa']!=null)
                                    { 
                                        ?>
                                    <div class=" m-auto text-lg font-weight-bolder ">
                                    <div class="mb-4">
                                    <h5 for="qs" style="color: #FF0075;"><?=$i?>. <?php echo $f['question'];
                                      ?></h5>
                                      <input type="hidden"   name="<?php echo $i . 'qdes'; ?>" value="<?=$f['question'];?>">
                                      <input type="hidden"  name="<?php echo $i . 'qsn'; ?>" value="<?=$f['nos'];?>">
                                    </div>
                                <div class="row g-2">
                                <div class="col-md-6">
                                    <div>
                                      <input id="oa" type="radio" name="<?php echo $i . 'ans'; ?>" value="A" >
                                      <label for="oa"><?php echo $f['oa']; ?></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                      <input id="ob" type="radio" name="<?php echo $i . 'ans'; ?>" value="B">
                                      <label for="ob"><?php echo $f['ob']; ?></label>
                                    </div>
                                </div>
                                </div>
                                <div class="row g-2">
                                <div class="col-md-6">
                                    <div>
                                      <input id="oc"type="radio" name="<?php echo $i . 'ans'; ?>" value="C">     
                                      <label for="oc"><?php echo $f['oc']; ?></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                      <input type="radio"  name="<?php echo $i . 'ans'; ?>" value="D" >
                                      <label for="od"><?php echo $f['od']; ?></label>
                                    </div>
                                </div>
                                
                        </div>
                        </div>
                        </div>
                        
                        
                        
                                                
                                        <?php } else {
                                        ?>  
                                            <div>
                                                <h5 style="color: #FF0075;"><?= $i; ?>. <?= $f['question']; ?></h5>
                                                <input type="hidden"  name="<?php echo $i . 'qdes'; ?>" value="<?php echo $f['question'];?>">
                                                <input type="hidden"  name="<?php echo $i . 'qsn'; ?>" value="<?php echo $f['nos'];?>">
                                                <textarea onpaste="return false;" ondrop="return false;" autocomplete="off" type="text" name="<?php echo $i . 'dsans'; ?>" placeholder="Type your answer" class="form-control mb-2 mt-4 " style="height: 100px"></textarea>
                                                </div>
                                                </div>
                                                
                                        <?php
                                        $_SESSION['ueid'] = $eid;
                                        session_create_id();
                                        }
                                        ?>
                                    
                                        
                                        <?php
                                    $i++;
                                }?>
                                <input type="hidden" name="n" value="<?php echo $i; ?>">
                                <div>
                                 <input type="submit" name="sub" value="SUBMIT" id="sub" Type="submit" class="mt-2 btn btn-success float-end px-4">
                                 </div>
                                 </form>
                                <?php
                            } 
                                    ?>
                                    
                            <?php
                            }
                        
                            ?>
                             
                        </div>  
                    </div>
                
            
    <!-- partial:partials/_footer.html -->
       
        <!-- partial -->
    
      
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