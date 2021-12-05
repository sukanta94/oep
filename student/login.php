<?php
session_start();

require_once "../BackEnd/config.php";
$err=0;
if (isset($_POST['login'])) {
   $sid = $_POST['sid'];
   $pass = $_POST['spassword'];
   
   if (!empty($sid) && !empty($pass)) {
      $query = "SELECT * FROM `studentlogin` WHERE `sid` = '$sid' AND `spassword` = '$pass'";
      $result = mysqli_query($con, $query);
      if ($result) {
         if ($result && mysqli_num_rows($result) > 0) {

            $user_data = mysqli_fetch_assoc($result);
            $_SESSION['sid'] = $user_data['sid'];
            if ($user_data['status'] == 1) {
               header("Location: dashboard.php");
               die;
            } else {
               $err=1;
               //auth rec
            }
         } else {
            $err=2;//login cred
         }
      }
   }
}
?>
<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

   <link rel="stylesheet" href=" style/fonts/icomoon/style.css">

   <link rel="stylesheet" href="style/css/owl.carousel.min.css">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="style/css/bootstrap.min.css">
      <script src="toast.js"></script>
   <!-- Style -->
   <link rel="stylesheet" href="style/css/style.css">
   <title>Login</title>
</head>

<body>
<div class="content py-0" style="
    width: 100%;margin-left: 82%; margin-top:5px">
<div class="toast align-items-center text-white bg-danger border-2 toast-container position-absolute m-2" style="
    margin-left: 70%;" id="epic" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="d-flex-end">
                           <div class="toast-body">
                             <h5>Incorrect Unique ID or Password</h5>
                           </div>
                        </div>
                     </div>
                     </div>
                     <div class="content py-0" style="
                     width: 100%;margin-left: 82%; margin-top:5px">

         <div class="toast align-items-center text-white bg-warning border-2 toast-container position-absolute m-2" style="
    margin-left: 70%;" id="epice" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="d-flex-start">
                           <div class="toast-body">
                             <h5>Varification in Process</h5>
                           </div>
                        </div>
                     </div>
                  </div>
   <div class="content">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
            </div>
            <?php if($err==2)
               {
               ?>
               <script>
               window.onload = function() {
               toast();}
               </script> 
               <?php
               }if($err==1)
               {?>
            <script>
               window.onload = function() {
               toasts();}
               </script> 

               <?php
               }
            ?>
            <div class="col-md-6 contents position-relative">
               <div class="row justify-content-center">
                  <div class="col-md-8">
                     <div class="mb-4">
                        <h3>Logging In</h3>
                        <p class="mb-4"></p>
                     </div>
                     <form action="" method="post">
                        <div class="form-group first">
                           <input type="text" class="form-control" id="username" placeholder="Unique ID" name="sid" required>

                        </div>
                        <div class="form-group last mb-4">
                           <input type="password" class="form-control" id="password" placeholder="Password" name="spassword" required>
                        </div>
                        <div class="d-flex mb-4 align-items-center">
                           <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                        </div>
                        <input type="submit" name="login" value="Log In" class="btn btn-block btn-primary">
                     </form>
                     <div class="signup-link">
                        <p>Don't have an account yet?</p>
                        <a class="text-primary" id="btn" data-toggle="modal" data-target="#modal">Sign Up</a>
                     </div>
                     
                     <div class="modal" id="modal">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <!-- Modal Header -->
                              <div class="modal-header">
                                 <h4 class="modal-title">Register user as</h4>
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <!-- Modal body -->
                              <div class="modal-body">
                                 <button type="button" class="btn btn-outline-success btn-rounded" onclick="location.href='corereg.html'">TDC Honours Student</button>
                                 <button type="button" class="btn btn-outline-success btn-rounded" onclick="location.href='passreg.html'">TDC Pass Student</button>
                              </div>

                              <!-- Modal footer -->
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal">Close</button>
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
   <script>
   var option=
   {
      animation:true,
      delay:4000,
      autohide :true
   };
   function toast()
   {
      var el=document.getElementById("epic");
      var te= new bootstrap.Toast(el,option);
      te.show();
   }
</script>
   <script src="style/js/jquery-3.3.1.min.js"></script>
   <script src="style/js/popper.min.js"></script>
   <script src="style/js/bootstrap.min.js"></script>
   <script src="style/js/main.js"></script>
</body>
</html>
