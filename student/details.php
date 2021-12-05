<?php
session_start();

require_once "../BackEnd/config.php";
    include("functions.php");
 
    $user_data = check_login($con);    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css"/>
    <link rel="stylesheet" type="text/css" href="style/reg.css">
    <title>Update Details</title>
</head>
<style>
h1{
    text-align: center;
    text-decoration: underline;
}
</style>
    <body>
        <span><h1>UPDATE PROFILE</h1></span>
        <?php
        $query="select * from studentlogin where course = '$user_data[scourse]'";
        $data=mysqli_query($con,$query);

          if($user_data['scourse']=='Hons'){
            echo '<form method="post" class="box">
                    <input type="text" placeholder="&#xf507; Full Name" name="sname" value="'.$user_data['sname'].'">
                    <input type="number" placeholder="&#xf0e0; Class Roll no." name="srollno" value="'.$user_data['sroll'].'">
                    <input type="email" placeholder="&#xf1fa; E-mail Id" name="semail" value="'.$user_data['semail'].'">
                    <input type="number" placeholder="&#xf879; Phone No." name="sphone" value="'.$user_data['sphone'].'">
                    <select name="ssem" id="semester">
                      <option hidden disabled selected value>Select Semester</option>
                      <option value="1st">1st Semester</option>
                      <option value="2nd">2nd Semester</option>
                      <option value="3rd">3rd Semester</option>
                      <option value="4th">4th Semester</option>
                      <option value="5th">5th Semester</option>
                      <option value="6th">6th Semester</option>
                   </select>
                   <select name="score" id="core">
                      <option hidden disabled selected value>Select CORE / DSE / CORE1</option>
                      <option value="accnt">Accountancy</option>
                      <option value="alteng">Alternative English</option>
                      <option value="arab">Arabic</option>
                      <option value="audcg">Auditing and Corporate Governance</option>
                      <option value="bnkin">Banking and Insurance</option>
                      <option value="bngc">Bengali</option>
                      <option value="bng">Bengali Communication</option>
                      <option value="bio">Biology</option>
                      <option value="biotech">Biotechnology</option>
                      <option value="bot">Botany</option>
                      <option value="bcomm">Business Communication</option>
                      <option value="blw">Business Law</option>
                      <option value="bmt">Business Mathematics</option>
                      <option value="bmst">Business Mathematics & Statistics</option>
                      <option value="bom">Business Organisation & Management</option>
                      <option value="brmp">Business Research Methods and Project Work</option>
                      <option value="bst">Business Statistics</option>
                      <option value="bsstud">Business Studies</option>
                      <option value="btpm">Business Tax Procedures & Management</option>
                      <option value="chem">Chemistry</option>
                      <option value="cmstcomm">CMST</option>
                      <option value="comlaw">Company Law</option>
                      <option value="compa">Computer Application</option>
                      <option value="cab">Computer Applications in Business</option>
                      <option value="compsc">Computer Science</option>
                      <option value="conac">Consumer Affairs & Customer Care</option>
                      <option value="cacc">Corporate Accounting</option>
                      <option value="claw">Corporate Laws</option>
                      <option value="ctp">Corporate Tax Planning</option>
                      <option value="costac">Cost Accounting</option>
                      <option value="ecomm">E-Commerce</option>
                      <option value="ecoenv">Ecology & Environmental Science</option>
                      <option value="eco">Economics</option>
                      <option value="engc">English</option>
                      <option value="eng">English Communication</option>
                      <option value="ent">Entrepreneurship</option>
                      <option value="evs">Environmental Studies (EVS)</option>
                      <option value="facc">Financial Accounting</option>
                      <option value="fmis">Financial Markets, Institutions and Financial Serv</option>
                      <option value="ffm">Fundamentals of Financial Management</option>
                      <option value="foi">Fundamentals of Investment</option>
                      <option value="geneng">General English</option>
                      <option value="geo">Geology</option>
                      <option value="hist">History</option>
                      <option value="hrm">Human Resource Management</option>
                      <option value="itlp">Income Tax Law & Practice</option>
                      <option value="indeco">Indian Economy</option>
                      <option value="itlaw">Indirect Tax Law</option>
                      <option value="irll">Industrial Relations & Labour Laws</option>
                      <option value="ibs">International Business</option>
                      <option value="maeco">Macro Economics</option>
                      <option value="maacc">Management Accounting</option>
                      <option value="mpa">Management Practice & Application</option>
                      <option value="math">Mathematics</option>
                      <option value="meco">Micro Economics</option>
                      <option value="mil">MIL</option>
                      <option value="Omsp">Office Management and Secretarial Practice</option>
                      <option value="psasale">Personal Selling & Salesmanship</option>
                      <option value="phil">Philosophy</option>
                      <option value="phy">Physics</option>
                      <option value="polsc">Political Science</option>
                      <option value="pom">Principles of Marketing</option>
                      <option value="snsk">Sanskrit</option>
                      <option value="stat">Statistics</option>
                      <option value="zoo">Zoology</option>
                  </select>
                  <select name="sgec" id="gec">
                      <option hidden disabled selected value>Select GE (not required for 3rd year)</option>
                      <option value="accnt">Accountancy</option>
                      <option value="alteng">Alternative English</option>
                      <option value="arab">Arabic</option>
                      <option value="audcg">Auditing and Corporate Governance</option>
                      <option value="bnkin">Banking and Insurance</option>
                      <option value="bngc">Bengali</option>
                      <option value="bng">Bengali Communication</option>
                      <option value="bio">Biology</option>
                      <option value="biotech">Biotechnology</option>
                      <option value="bot">Botany</option>
                      <option value="botbio">Botany & Biotechnology</option>
                      <option value="bcomm">Business Communication</option>
                      <option value="blw">Business Law</option>
                      <option value="bmt">Business Mathematics</option>
                      <option value="bmst">Business Mathematics & Statistics</option>
                      <option value="bom">Business Organisation & Management</option>
                      <option value="brmp">Business Research Methods and Project Work</option>
                      <option value="bst">Business Statistics</option>
                      <option value="bsstud">Business Studies</option>
                      <option value="btpm">Business Tax Procedures & Management</option>
                      <option value="chem">Chemistry</option>
                      <option value="cmstcomm">CMST</option>
                      <option value="comlaw">Company Law</option>
                      <option value="compa">Computer Application</option>
                      <option value="cab">Computer Applications in Business</option>
                      <option value="compsc">Computer Science</option>
                      <option value="compsca">Computer Science & Application</option>
                      <option value="conac">Consumer Affairs & Customer Care</option>
                      <option value="cacc">Corporate Accounting</option>
                      <option value="claw">Corporate Laws</option>
                      <option value="ctp">Corporate Tax Planning</option>
                      <option value="costac">Cost Accounting</option>
                      <option value="ecomm">E-Commerce</option>
                      <option value="ecoenv">Ecology & Environmental Science</option>
                      <option value="eco">Economics</option>
                      <option value="engc">English</option>
                      <option value="eng">English Communication</option>
                      <option value="ent">Entrepreneurship</option>
                      <option value="evs">Environmental Studies (EVS)</option>
                      <option value="facc">Financial Accounting</option>
                      <option value="fmis">Financial Markets, Institutions and Financial Serv</option>
                      <option value="ffm">Fundamentals of Financial Management</option>
                      <option value="foi">Fundamentals of Investment</option>
                      <option value="geneng">General English</option>
                      <option value="geo">Geology</option>
                      <option value="hist">History</option>
                      <option value="hrm">Human Resource Management</option>
                      <option value="itlp">Income Tax Law & Practice</option>
                      <option value="indeco">Indian Economy</option>
                      <option value="itlaw">Indirect Tax Law</option>
                      <option value="irll">Industrial Relations & Labour Laws</option>
                      <option value="ibs">International Business</option>
                      <option value="maeco">Macro Economics</option>
                      <option value="maacc">Management Accounting</option>
                      <option value="mpa">Management Practice & Application</option>
                      <option value="math">Mathematics</option>
                      <option value="meco">Micro Economics</option>
                      <option value="mil">MIL</option>
                      <option value="Omsp">Office Management and Secretarial Practice</option>
                      <option value="psasale">Personal Selling & Salesmanship</option>
                      <option value="phil">Philosophy</option>
                      <option value="phy">Physics</option>
                      <option value="polsc">Political Science</option>
                      <option value="pom">Principles of Marketing</option>
                      <option value="snsk">Sanskrit</option>
                      <option value="stat">Statistics</option>
                      <option value="zoo">Zoology</option>
                  </select>
                  <select name="ssec" id="sec">
                      <option hidden disabled selected value>Select SEC (not required for 1st and 3rd year)</option>
                      <option value="accnt">Accountancy</option>
                      <option value="alteng">Alternative English</option>
                      <option value="arab">Arabic</option>
                      <option value="audcg">Auditing and Corporate Governance</option>
                      <option value="bnkin">Banking and Insurance</option>
                      <option value="bngc">Bengali</option>
                      <option value="bng">Bengali Communication</option>
                      <option value="bio">Biology</option>
                      <option value="biotech">Biotechnology</option>
                      <option value="bot">Botany</option>
                      <option value="botbio">Botany & Biotechnology</option>
                      <option value="bcomm">Business Communication</option>
                      <option value="blw">Business Law</option>
                      <option value="bmt">Business Mathematics</option>
                      <option value="bmst">Business Mathematics & Statistics</option>
                      <option value="bom">Business Organisation & Management</option>
                      <option value="brmp">Business Research Methods and Project Work</option>
                      <option value="bst">Business Statistics</option>
                      <option value="bsstud">Business Studies</option>
                      <option value="btpm">Business Tax Procedures & Management</option>
                      <option value="chem">Chemistry</option>
                      <option value="cmstcomm">CMST</option>
                      <option value="comlaw">Company Law</option>
                      <option value="compa">Computer Application</option>
                      <option value="cab">Computer Applications in Business</option>
                      <option value="compsc">Computer Science</option>
                      <option value="compsca">Computer Science & Application</option>
                      <option value="conac">Consumer Affairs & Customer Care</option>
                      <option value="cacc">Corporate Accounting</option>
                      <option value="claw">Corporate Laws</option>
                      <option value="ctp">Corporate Tax Planning</option>
                      <option value="costac">Cost Accounting</option>
                      <option value="ecomm">E-Commerce</option>
                      <option value="ecoenv">Ecology & Environmental Science</option>
                      <option value="eco">Economics</option>
                      <option value="engc">English</option>
                      <option value="eng">English Communication</option>
                      <option value="ent">Entrepreneurship</option>
                      <option value="evs">Environmental Studies (EVS)</option>
                      <option value="facc">Financial Accounting</option>
                      <option value="fmis">Financial Markets, Institutions and Financial Serv</option>
                      <option value="ffm">Fundamentals of Financial Management</option>
                      <option value="foi">Fundamentals of Investment</option>
                      <option value="geneng">General English</option>
                      <option value="geo">Geology</option>
                      <option value="hist">History</option>
                      <option value="hrm">Human Resource Management</option>
                      <option value="itlp">Income Tax Law & Practice</option>
                      <option value="indeco">Indian Economy</option>
                      <option value="itlaw">Indirect Tax Law</option>
                      <option value="irll">Industrial Relations & Labour Laws</option>
                      <option value="ibs">International Business</option>
                      <option value="maeco">Macro Economics</option>
                      <option value="maacc">Management Accounting</option>
                      <option value="mpa">Management Practice & Application</option>
                      <option value="math">Mathematics</option>
                      <option value="meco">Micro Economics</option>
                      <option value="mil">MIL</option>
                      <option value="Omsp">Office Management and Secretarial Practice</option>
                      <option value="psasale">Personal Selling & Salesmanship</option>
                      <option value="phil">Philosophy</option>
                      <option value="phy">Physics</option>
                      <option value="polsc">Political Science</option>
                      <option value="pom">Principles of Marketing</option>
                      <option value="snsk">Sanskrit</option>
                      <option value="stat">Statistics</option>
                      <option value="zoo">Zoology</option>
                  </select>
                  <select name="saecc" id="aecc">
                      <option hidden disabled selected value>Select AECC (not required for 2nd and 3rd year)</option>
                      <option value="bng">Bengali Communication</option>
                      <option value="bcomm">Business Communication</option>
                      <option value="eng">English Communication</option>
                      <option value="evs">Environmental Studies (EVS)</option>
                  </select>
                   <input type="submit" name="cupdate" value="Update Details">
                 </form>';

                 if(isset($_POST['cupdate'])) {
                     $n=$_POST['sname'];
                     $r=$_POST['srollno'];
                     $e=$_POST['semail'];
                     $p=$_POST['sphone'];
                     $s=$_POST['ssem'];
                     $c=$_POST['score'];
                     $g=$_POST['sgec'];
                     $se=$_POST['ssec'];
                     $a=$_POST['saecc'];

                     $query="update studentlogin set sname='$n',sroll='$r',semail='$e',sphone='$p',ssem='$s',score='$c',sgec='$g',ssec='$se',saecc='$a' where sid='$user_data[sid]'";
                     $data=mysqli_query($con,$query);
                     if($data){
                          echo "<script>alert('Profile picture updated successfully');window.location.href='profile.php';</script>";
                     }
                     else{
                          echo "Something went wrong";
                     }
                 }
        }
        else{
            echo '<form method="post" class="box">
                    <input type="text" placeholder="&#xf507; Full Name" name="sname" value="'.$user_data['sname'].'">
                    <input type="number" placeholder="&#xf0e0; Class Roll no." name="srollno" value="'.$user_data['sroll'].'">
                    <input type="email" placeholder="&#xf1fa; E-mail Id" name="semail" value="'.$user_data['semail'].'">
                    <input type="number" placeholder="&#xf879; Phone No." name="sphone" value="'.$user_data['sphone'].'">
                    <select name="ssem" id="semester">
                      <option hidden disabled selected value>Select Semester</option>
                      <option value="1st">1st Semester</option>
                      <option value="2nd">2nd Semester</option>
                      <option value="3rd">3rd Semester</option>
                      <option value="4th">4th Semester</option>
                      <option value="5th">5th Semester</option>
                      <option value="6th">6th Semester</option>
                   </select>
                   <select name="score" id="pass1">
                      <option hidden disabled selected value>Select DSC1/DSE1</option>
                      <option value="accnt">Accountancy</option>
                      <option value="alteng">Alternative English</option>
                      <option value="arab">Arabic</option>
                      <option value="audcg">Auditing and Corporate Governance</option>
                      <option value="bnkin">Banking and Insurance</option>
                      <option value="bngc">Bengali</option>
                      <option value="bng">Bengali Communication</option>
                      <option value="bio">Biology</option>
                      <option value="biotech">Biotechnology</option>
                      <option value="bot">Botany</option>
                      <option value="botbio">Botany & Biotechnology</option>
                      <option value="bcomm">Business Communication</option>
                      <option value="blw">Business Law</option>
                      <option value="bmt">Business Mathematics</option>
                      <option value="bmst">Business Mathematics & Statistics</option>
                      <option value="bom">Business Organisation & Management</option>
                      <option value="brmp">Business Research Methods and Project Work</option>
                      <option value="bst">Business Statistics</option>
                      <option value="bsstud">Business Studies</option>
                      <option value="btpm">Business Tax Procedures & Management</option>
                      <option value="chem">Chemistry</option>
                      <option value="cmstcomm">CMST</option>
                      <option value="comlaw">Company Law</option>
                      <option value="compa">Computer Application</option>
                      <option value="cab">Computer Applications in Business</option>
                      <option value="compsc">Computer Science</option>
                      <option value="compsca">Computer Science & Application</option>
                      <option value="conac">Consumer Affairs & Customer Care</option>
                      <option value="cacc">Corporate Accounting</option>
                      <option value="claw">Corporate Laws</option>
                      <option value="ctp">Corporate Tax Planning</option>
                      <option value="costac">Cost Accounting</option>
                      <option value="ecomm">E-Commerce</option>
                      <option value="ecoenv">Ecology & Environmental Science</option>
                      <option value="eco">Economics</option>
                      <option value="engc">English</option>
                      <option value="eng">English Communication</option>
                      <option value="ent">Entrepreneurship</option>
                      <option value="evs">Environmental Studies (EVS)</option>
                      <option value="facc">Financial Accounting</option>
                      <option value="fmis">Financial Markets, Institutions and Financial Serv</option>
                      <option value="ffm">Fundamentals of Financial Management</option>
                      <option value="foi">Fundamentals of Investment</option>
                      <option value="geneng">General English</option>
                      <option value="geo">Geology</option>
                      <option value="hist">History</option>
                      <option value="hrm">Human Resource Management</option>
                      <option value="itlp">Income Tax Law & Practice</option>
                      <option value="indeco">Indian Economy</option>
                      <option value="itlaw">Indirect Tax Law</option>
                      <option value="irll">Industrial Relations & Labour Laws</option>
                      <option value="ibs">International Business</option>
                      <option value="maeco">Macro Economics</option>
                      <option value="maacc">Management Accounting</option>
                      <option value="mpa">Management Practice & Application</option>
                      <option value="math">Mathematics</option>
                      <option value="meco">Micro Economics</option>
                      <option value="mil">MIL</option>
                      <option value="Omsp">Office Management and Secretarial Practice</option>
                      <option value="psasale">Personal Selling & Salesmanship</option>
                      <option value="phil">Philosophy</option>
                      <option value="phy">Physics</option>
                      <option value="polsc">Political Science</option>
                      <option value="pom">Principles of Marketing</option>
                      <option value="snsk">Sanskrit</option>
                      <option value="stat">Statistics</option>
                      <option value="zoo">Zoology</option>
                  </select>
                  <select name="spass2" id="pass2">
                      <option hidden disabled selected value>Select DSC2/DSE2</option>
                      <option value="accnt">Accountancy</option>
                      <option value="alteng">Alternative English</option>
                      <option value="arab">Arabic</option>
                      <option value="audcg">Auditing and Corporate Governance</option>
                      <option value="bnkin">Banking and Insurance</option>
                      <option value="bngc">Bengali</option>
                      <option value="bng">Bengali Communication</option>
                      <option value="bio">Biology</option>
                      <option value="biotech">Biotechnology</option>
                      <option value="bot">Botany</option>
                      <option value="botbio">Botany & Biotechnology</option>
                      <option value="bcomm">Business Communication</option>
                      <option value="blw">Business Law</option>
                      <option value="bmt">Business Mathematics</option>
                      <option value="bmst">Business Mathematics & Statistics</option>
                      <option value="bom">Business Organisation & Management</option>
                      <option value="brmp">Business Research Methods and Project Work</option>
                      <option value="bst">Business Statistics</option>
                      <option value="bsstud">Business Studies</option>
                      <option value="btpm">Business Tax Procedures & Management</option>
                      <option value="chem">Chemistry</option>
                      <option value="cmstcomm">CMST</option>
                      <option value="comlaw">Company Law</option>
                      <option value="compa">Computer Application</option>
                      <option value="cab">Computer Applications in Business</option>
                      <option value="compsc">Computer Science</option>
                      <option value="compsca">Computer Science & Application</option>
                      <option value="conac">Consumer Affairs & Customer Care</option>
                      <option value="cacc">Corporate Accounting</option>
                      <option value="claw">Corporate Laws</option>
                      <option value="ctp">Corporate Tax Planning</option>
                      <option value="costac">Cost Accounting</option>
                      <option value="ecomm">E-Commerce</option>
                      <option value="ecoenv">Ecology & Environmental Science</option>
                      <option value="eco">Economics</option>
                      <option value="engc">English</option>
                      <option value="eng">English Communication</option>
                      <option value="ent">Entrepreneurship</option>
                      <option value="evs">Environmental Studies (EVS)</option>
                      <option value="facc">Financial Accounting</option>
                      <option value="fmis">Financial Markets, Institutions and Financial Serv</option>
                      <option value="ffm">Fundamentals of Financial Management</option>
                      <option value="foi">Fundamentals of Investment</option>
                      <option value="geneng">General English</option>
                      <option value="geo">Geology</option>
                      <option value="hist">History</option>
                      <option value="hrm">Human Resource Management</option>
                      <option value="itlp">Income Tax Law & Practice</option>
                      <option value="indeco">Indian Economy</option>
                      <option value="itlaw">Indirect Tax Law</option>
                      <option value="irll">Industrial Relations & Labour Laws</option>
                      <option value="ibs">International Business</option>
                      <option value="maeco">Macro Economics</option>
                      <option value="maacc">Management Accounting</option>
                      <option value="mpa">Management Practice & Application</option>
                      <option value="math">Mathematics</option>
                      <option value="meco">Micro Economics</option>
                      <option value="mil">MIL</option>
                      <option value="Omsp">Office Management and Secretarial Practice</option>
                      <option value="psasale">Personal Selling & Salesmanship</option>
                      <option value="phil">Philosophy</option>
                      <option value="phy">Physics</option>
                      <option value="polsc">Political Science</option>
                      <option value="pom">Principles of Marketing</option>
                      <option value="snsk">Sanskrit</option>
                      <option value="stat">Statistics</option>
                      <option value="zoo">Zoology</option>
                  </select>
                  <select name="spass3" id="pass3">
                      <option hidden disabled selected value>Select DSC3/DSE3/Language/GE</option>
                      <option value="accnt">Accountancy</option>
                      <option value="alteng">Alternative English</option>
                      <option value="arab">Arabic</option>
                      <option value="audcg">Auditing and Corporate Governance</option>
                      <option value="bnkin">Banking and Insurance</option>
                      <option value="bngc">Bengali</option>
                      <option value="bng">Bengali Communication</option>
                      <option value="bio">Biology</option>
                      <option value="biotech">Biotechnology</option>
                      <option value="bot">Botany</option>
                      <option value="botbio">Botany & Biotechnology</option>
                      <option value="bcomm">Business Communication</option>
                      <option value="blw">Business Law</option>
                      <option value="bmt">Business Mathematics</option>
                      <option value="bmst">Business Mathematics & Statistics</option>
                      <option value="bom">Business Organisation & Management</option>
                      <option value="brmp">Business Research Methods and Project Work</option>
                      <option value="bst">Business Statistics</option>
                      <option value="bsstud">Business Studies</option>
                      <option value="btpm">Business Tax Procedures & Management</option>
                      <option value="chem">Chemistry</option>
                      <option value="cmstcomm">CMST</option>
                      <option value="comlaw">Company Law</option>
                      <option value="compa">Computer Application</option>
                      <option value="cab">Computer Applications in Business</option>
                      <option value="compsc">Computer Science</option>
                      <option value="compsca">Computer Science & Application</option>
                      <option value="conac">Consumer Affairs & Customer Care</option>
                      <option value="cacc">Corporate Accounting</option>
                      <option value="claw">Corporate Laws</option>
                      <option value="ctp">Corporate Tax Planning</option>
                      <option value="costac">Cost Accounting</option>
                      <option value="ecomm">E-Commerce</option>
                      <option value="ecoenv">Ecology & Environmental Science</option>
                      <option value="eco">Economics</option>
                      <option value="engc">English</option>
                      <option value="eng">English Communication</option>
                      <option value="ent">Entrepreneurship</option>
                      <option value="evs">Environmental Studies (EVS)</option>
                      <option value="facc">Financial Accounting</option>
                      <option value="fmis">Financial Markets, Institutions and Financial Serv</option>
                      <option value="ffm">Fundamentals of Financial Management</option>
                      <option value="foi">Fundamentals of Investment</option>
                      <option value="geneng">General English</option>
                      <option value="geo">Geology</option>
                      <option value="hist">History</option>
                      <option value="hrm">Human Resource Management</option>
                      <option value="itlp">Income Tax Law & Practice</option>
                      <option value="indeco">Indian Economy</option>
                      <option value="itlaw">Indirect Tax Law</option>
                      <option value="irll">Industrial Relations & Labour Laws</option>
                      <option value="ibs">International Business</option>
                      <option value="maeco">Macro Economics</option>
                      <option value="maacc">Management Accounting</option>
                      <option value="mpa">Management Practice & Application</option>
                      <option value="math">Mathematics</option>
                      <option value="meco">Micro Economics</option>
                      <option value="mil">MIL</option>
                      <option value="Omsp">Office Management and Secretarial Practice</option>
                      <option value="psasale">Personal Selling & Salesmanship</option>
                      <option value="phil">Philosophy</option>
                      <option value="phy">Physics</option>
                      <option value="polsc">Political Science</option>
                      <option value="pom">Principles of Marketing</option>
                      <option value="snsk">Sanskrit</option>
                      <option value="stat">Statistics</option>
                      <option value="zoo">Zoology</option>
                  </select>
                  <select name="ssec" id="sec">
                      <option hidden disabled selected value>Select SEC (not required for 1st and 3rd year)</option>
                      <option value="accnt">Accountancy</option>
                      <option value="alteng">Alternative English</option>
                      <option value="arab">Arabic</option>
                      <option value="audcg">Auditing and Corporate Governance</option>
                      <option value="bnkin">Banking and Insurance</option>
                      <option value="bngc">Bengali</option>
                      <option value="bng">Bengali Communication</option>
                      <option value="bio">Biology</option>
                      <option value="biotech">Biotechnology</option>
                      <option value="bot">Botany</option>
                      <option value="botbio">Botany & Biotechnology</option>
                      <option value="bcomm">Business Communication</option>
                      <option value="blw">Business Law</option>
                      <option value="bmt">Business Mathematics</option>
                      <option value="bmst">Business Mathematics & Statistics</option>
                      <option value="bom">Business Organisation & Management</option>
                      <option value="brmp">Business Research Methods and Project Work</option>
                      <option value="bst">Business Statistics</option>
                      <option value="bsstud">Business Studies</option>
                      <option value="btpm">Business Tax Procedures & Management</option>
                      <option value="chem">Chemistry</option>
                      <option value="cmstcomm">CMST</option>
                      <option value="comlaw">Company Law</option>
                      <option value="compa">Computer Application</option>
                      <option value="cab">Computer Applications in Business</option>
                      <option value="compsc">Computer Science</option>
                      <option value="compsca">Computer Science & Application</option>
                      <option value="conac">Consumer Affairs & Customer Care</option>
                      <option value="cacc">Corporate Accounting</option>
                      <option value="claw">Corporate Laws</option>
                      <option value="ctp">Corporate Tax Planning</option>
                      <option value="costac">Cost Accounting</option>
                      <option value="ecomm">E-Commerce</option>
                      <option value="ecoenv">Ecology & Environmental Science</option>
                      <option value="eco">Economics</option>
                      <option value="engc">English</option>
                      <option value="eng">English Communication</option>
                      <option value="ent">Entrepreneurship</option>
                      <option value="evs">Environmental Studies (EVS)</option>
                      <option value="facc">Financial Accounting</option>
                      <option value="fmis">Financial Markets, Institutions and Financial Serv</option>
                      <option value="ffm">Fundamentals of Financial Management</option>
                      <option value="foi">Fundamentals of Investment</option>
                      <option value="geneng">General English</option>
                      <option value="geo">Geology</option>
                      <option value="hist">History</option>
                      <option value="hrm">Human Resource Management</option>
                      <option value="itlp">Income Tax Law & Practice</option>
                      <option value="indeco">Indian Economy</option>
                      <option value="itlaw">Indirect Tax Law</option>
                      <option value="irll">Industrial Relations & Labour Laws</option>
                      <option value="ibs">International Business</option>
                      <option value="maeco">Macro Economics</option>
                      <option value="maacc">Management Accounting</option>
                      <option value="mpa">Management Practice & Application</option>
                      <option value="math">Mathematics</option>
                      <option value="meco">Micro Economics</option>
                      <option value="mil">MIL</option>
                      <option value="Omsp">Office Management and Secretarial Practice</option>
                      <option value="psasale">Personal Selling & Salesmanship</option>
                      <option value="phil">Philosophy</option>
                      <option value="phy">Physics</option>
                      <option value="polsc">Political Science</option>
                      <option value="pom">Principles of Marketing</option>
                      <option value="snsk">Sanskrit</option>
                      <option value="stat">Statistics</option>
                      <option value="zoo">Zoology</option>
                  </select>
                  <select name="saecc" id="aecc">
                      <option hidden disabled selected value>Select AECC (not required for 2nd and 3rd year)</option>
                      <option value="bng">Bengali Communication</option>
                      <option value="bcomm">Business Communication</option>
                      <option value="eng">English Communication</option>
                      <option value="evs">Environmental Studies (EVS)</option>
                  </select>
                   <input type="submit" name="pupdate" value="Update Details">
                 </form>';

                 if(isset($_POST['pupdate'])) {
                     $n=$_POST['sname'];
                     $r=$_POST['srollno'];
                     $e=$_POST['semail'];
                     $p=$_POST['sphone'];
                     $s=$_POST['ssem'];
                     $p1=$_POST['score'];
                     $p2=$_POST['spass2'];
                     $p3=$_POST['spass3'];                     
                     $se=$_POST['ssec'];
                     $a=$_POST['saecc'];

                     $query="update studentlogin set sname='$n',sroll='$r',semail='$e',sphone='$p',ssem='$s',score='$p1',spass2='$p2',spass3='$p3',ssec='$se',saecc='$a' where sid='$user_data[sid]'";
                     $data=mysqli_query($con,$query);
                     if($data){
                          echo "<script>alert('Profile picture updated successfully');window.location.href='profile.php';</script>";
                     }
                     else{
                          echo "Something went wrong";
                     }
                 }
        }
        
        ?>
        
</body>
</html>