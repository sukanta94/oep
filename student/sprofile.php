<?php 
require_once "../BackEnd/config.php";
session_start();
$pinflag = 0;
$name = 0;
if (isset($_SESSION['s_rollno'])) {
    $name = 1;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="spro.css">
    <title>student</title>
    </head>
    <h1>Welcome STUDENT</h1>
    <?php
    if ($name == 1) {
        echo $_SESSION['s_name'];
       // echo $_SESSION['u_id'];
        echo '<br>
        <a href="slogout.php">logout Here</a>';
        } 
        else 
        {
        echo "noone logged in";
        echo '<br />
        <a href="slogin.php">login Here</a>';
        } 
        ?>
    <div>
        <a href="view_question.php">view Exampaper</a>

        <a href="give_exam.php">GIVE EXAm</a>
        
    </div>


<body>
</body>
</html>