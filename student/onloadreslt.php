<?php
session_start();

include_once("../BackEnd/config.php");
include_once("functions.php");

$user_data = check_login($con);
$uid=$user_data['sid'];

$qry=mysqli_query($con,"SELECT * FROM `ans_set` WHERE `s_id` = '$uid' AND `publish`=1 ");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <title>Print</title>
</head>
<body onload="window.print()">
    <table width="600" cellpadding="0" cellspacing="0" style="margin:0px auto 0;">
        <tbody><tr>
                        <td style="padding: 2px;"></td>
                        <td style="text-align: right; padding:2px;">                              
                            </td>
        </tr>
    </tbody></table>

   <table width="600" cellpadding="0" cellspacing="0" style="margin:20px auto 0;">
        <tbody><tr>
            <td align="center">
                <th align="center" style="text-transform:uppercase; text-decoration:underline;">Grade Card</th>
            </td>
        </tr>
    </tbody></table>

    <table width="630" cellpadding="0" cellspacing="0" style="margin:20px auto 0;" class="studen_info">
        <thead>
            <tr>
                <th align="center" style="text-transform:uppercase;">
                                <?php echo $user_data['ssem'] ?> SEMESTER EXAMINATION
                                </th>
            </tr>
        </thead>
    </table>
    <table width="600" cellpadding="0" cellspacing="0" style="margin:20px auto 0;" class="studen_info">
        <tbody>
            <tr>
                <td>
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                            <td width="100px"><i>Name :</i></td>
                            <td align="center" class="capBorder" style="border-bottom: black 1px dotted;"><?php echo $user_data['sname'] ?></td>
                            <td align="right" rowspan="3"><img src="<?php echo $user_data['spic']; ?>" width="100" height="110"></td>
                        </tr> 
                        <tr>
                            <td width="100px"><i>Roll No. :</i></td>
                            <td align="left" class="capBorder" style="border-bottom: black 1px dotted;"><?php echo $user_data['sroll'] ?></td>
                        </tr>
                        <tr>
                            <td width="100px"><i>Email :</i></td>
                            <td align="left" class="capBorder" style="border-bottom: black 1px dotted;"><?php echo $user_data['semail'] ?></td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%" cellpadding="0" cellspacing="0">
                                                 <tbody><tr>
                            <td width="100px"><i>Stream :</i></td>
                            <td align="left" class="capBorder" style="border-bottom: black 1px dotted;"><?php echo $user_data['sstream'] ?></td>
                            <td width="100px"><i>Course :</i></td>
                            <td align="left" class="capBorder" style="border-bottom: black 1px dotted;"><?php echo $user_data['scourse'] ?></td>
                        </tr>
                                            </tbody></table>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                            <td align="left" width="100px"><i>Phone No. :</i></td>
                            <td align="left" class="capBorder" style="border-bottom: black 1px dotted;"><?php echo $user_data['sphone'] ?></td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                            <td width="100px"><i>Department :</i></td>
                            <td align="left" class="capBorder" style="border-bottom: black 1px dotted;"><?php echo $user_data['score'] ?></td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>

        </tbody>
    </table><br><br>

                <table border="1">
                  <thead>
                    <tr>
                      <th scope='col' align="center" width="240">No.</th>
                      <th scope='col' align="center" width="240">Paper Name</th>
                      <th scope='col' align="center" width="240">Paper No.</th>
                      <th scope='col' align="center" width="240">Full Mark</th>
                      <th scope='col' align="center" width="240">Pass Mark</th>
                      <th scope='col' align="center" width="240">Obtained Mark</th>
                    </tr><br>
                  </thead>
        <?php $i=1;
            while($row=mysqli_fetch_assoc($qry)){
              $exm_name=$row['qs'];
              $exm_id=$row['e_id'];              
              $omark=$row['marks'];
              $fmark=$row['f_mark'];
              $pmark=$row['p_mark'];
              $sname=$row['s_name'];
              ?>


                  <tbody>
                    <tr>
                      <th scope='row' align="center" width="240"><?=$i?></th>
                      <td align="center"><?=$exm_name?></td>
                      <td align="center"><?=$exm_id?></td>
                      <td align="center"><?=$fmark?></td>
                      <td align="center"><?=$pmark?></td>
                      <td align="center"><?=$omark?></td>
                    </tr>
                    <?php     $i++;    
     }
             
         ?>

         </tbody>
        </table>               
      
           
                              
<script src="assets/vendors/js/core.js"></script>
<script src="assets/js/template.js"></script>
<script src="assets/js/dashboard.js"></script>

</body>
</html>
