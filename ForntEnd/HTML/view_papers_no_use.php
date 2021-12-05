<?php   // this a list view of all the question paper or set made by the teacher,, click the link to view that papers all questions
        // TODO add Take Exam Feature
session_start();
require_once "../../BackEnd/config.php";
$uid = $_SESSION['u_id'];

$q = "SELECT * FROM `q_set` WHERE `unique_id` = '$uid' ";
$que = mysqli_query($con, $q);

if ($que) {
    $num = mysqli_num_rows($que);
    if ($num) {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <title>view </title>
        </head>

        <body>
            <h1 style="text-align: center;">Papers View</h1>
            <?php while ($f = mysqli_fetch_assoc($que)) {
                $eid = $f['e_id']; ?>
                <a href="view_questions.php?examid=<?php echo $eid; ?>"> Exam id is: <?php echo $f['e_name']; ?></a>
                
                <br>
    <?php
            }
        } else {
            echo "Nothing found";
        }
    }
    ?>
        </body>

        </html>