<?php //viewing all questions of a paaper dynamically AND ans portion not needed
session_start();
require_once "../../BackEnd/config.php";
$eid=$_GET['examid'];

$q = "SELECT * FROM `qs` WHERE `e_id` = '$eid' ";

$p = mysqli_query($con, $q);

if(isset($_POST['sub']))
{
$sub = $_POST['radio'];

$ans = "SELECT * FROM `qs` WHERE `ca` LIKE '$sub'";
$ansq=mysqli_query($con,$ans);
$res=mysqli_num_rows($ansq);
if($res>0)
{
    echo "CORRECT";
}
else{
   
    echo "wrong";
}

}
if ($p) {
    $num = mysqli_num_rows($p);
    if ($num) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Set question</title>
        </head>
        <body>
            <h1 style="text-align: center;">question set of </h1>
            <h1 style="text-align: center;">Hello,<?php echo $_SESSION['s_rollno']; ?></h1>
            <div class="product">
                <h2><a style="color: red;" href="make_question.php?examid=<?php echo $eid; ?>"> Add Question</a></h2>
                <?php
                $i = 1;
                while ($f = mysqli_fetch_assoc($p)) {
                ?>
                    <h3> Q.<?php echo $i; ?>- <?php echo $f['question']; ?></h3>
                    <form action="" method="POST">
                          <input type="radio" id="html" name="radio" value="A">
                          <label for="html"> <?php echo $f['oa']; ?></label><br>
                          <input type="radio" id="css" name="radio" value="B">
                          <label for="css"><?php echo $f['ob']; ?></label><br>
                          <input type="radio" id="javascript" name="radio" value="C">
                          <label for="javascript"><?php echo $f['oc']; ?></label>
                          <input type="radio" id="rr" name="radio" value="D">
                          <label for="rr"><?php echo $f['od']; ?></label>
                        <input type="submit" name="sub" value="value">
                    </form>
                <?php
                    $i++;
                }
                }
                else
                {
                echo "Nothing found";
                ?>
                <h2><a style="color: red;" href="make_question.php?examid=<?php echo $eid; ?>"> Add Question</a></h2>
        <?php
            }
        }
        ?>
        <script>
        </script>
        </body>

        </html>