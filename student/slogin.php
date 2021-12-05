<?php 
session_start();
require_once "../BackEnd/config.php";
//include "../BackEnd/config.php";
$err = 0;
if ($con) {
  if (count($_POST) > 0) {
    $uno = $_POST['s_rollno'];
    $u = $_POST['s_pass'];
    $runo = "SELECT * FROM `s_registered` WHERE `s_rollno` = '$uno' AND `s_pass` = '$u' ";
    $a = mysqli_query($con, $runo);
    $unam = mysqli_num_rows($a);
    $aa=mysqli_fetch_assoc($a);
    if ($unam > 0) {
      $_SESSION['s_name'] = $aa['s_name'];
      session_create_id();
      $_SESSION['sdept'] = $aa['s_dept'];
      session_create_id();
      $_SESSION['type'] = $aa['course'];
      session_create_id();
      $_SESSION['sem'] = $aa['s_sem'];
      session_create_id();

      $_SESSION['s_rollno'] = $aa['s_rollno'];
        header("location:sprofile.php");
        session_create_id();
      } 
      else {
      $err = 1;
    }
  }
  $con->close();
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASd</title>
</head>
<body>
    <h1>Hello login page</h1>
    <div>
        <form action="" method="post">
            <input type="text" name="s_rollno" placeholder="Enter Roll-NO">
            <input type="password" name="s_pass" placeholder="Enter password">
            <button type="submit">login</button>
        </form>
        <br>
        <a href="sregister.php">Register here</a>
    </div>
</body>
</html>