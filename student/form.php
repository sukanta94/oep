<p id="demo"> TIME </p>
            
            <p id="hours"></p>
            <p id="mins"></p>
            <p id="secs"></p>
            <h2 id="end"></h2>
            <div class="form">
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
                          <label for="javascript"><?php echo $f['oc']; ?></label>
                          <input type="radio"  name="<?php echo $i . 'ans'; ?>" value="D">
                          <label for="rr"><?php echo $f['od']; ?></label>
                    <?php }
                    else
                        {
                        ?>
                        <h3> Q.<?php echo $i; ?>- <?php echo $f['question']; ?></h3>

                        <input type="hidden"  name="<?php echo $i . 'qdes'; ?>" value="<?php echo $f['question'];?>">
                        <input type="hidden"  name="<?php echo $i . 'qsn'; ?>" value="<?php echo $f['nos'];?>">
                        <h2><input type="text" name="<?php echo $i . 'dsans'; ?>" placeholder="Type Answer Here"></h2>
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
                <input type="submit" name="sub" value="SUBMIT" id="sub">
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