<?php
require_once "../BackEnd/config.php";

if ($con) {
    $flag = 0;
    if (count($_POST) > 0) {

      $sname = $_POST['s_name'];
      $sroll = $_POST['s_roll'];
      $semail =$_POST['s_email']; 
      $spass = $_POST['s_pass'];
      $sdept=$_POST['s_dept'];
      $ssem=$_POST['s_sem'];
      $type=$_POST['type'];
      $runo = "SELECT * FROM `s_registered` WHERE `s_email` = '$semail' ";
      $ss = mysqli_query($con, $runo);
      $d = mysqli_num_rows($ss);

      if ($d > 0) {
        $flag = 1;
      } else {

        $sql = "INSERT INTO `s_registered` (`s_name`, `s_rollno`, `s_email`, `s_pass`, `s_dept`, `s_sem`,`course`) VALUES 
        ('$sname', '$sroll', '$semail', '$spass', '$sdept', '$ssem', '$type' );";

        if (mysqli_query($con, $sql)) {
            header("location: slogin.php");
        } else {
          echo "fail";
        }
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
    <title>Document</title>
</head>
<body>
          <!--  <form method="post" action="">
                <h1>Register</h1>
                  <input type="text" placeholder="&#xf507; Full Name" name="s_name">

                  <input type="number" placeholder="&#xf0e0; College Roll no." name="s_rollno">

                  <input type="email" placeholder="&#xf1fa; E-mail Id" name="s_email">

                  <select name="s_dept" id="course" >
                      <option hidden disabled selected value>Select Course</option>
                      <option value="alteng" >Alternative English</option>
                          <option value="arab" >Arabic</option>
                          <option value="bngc" >Bengali</option>
                          <option value="bng" >Bengali Communication</option>
                          <option value="bio" >Biology</option>
                          <option value="botbio" >Botany &amp; Biotechnology</option>
                          <option value="chem" >Chemistry</option>
                          <option value="cmrc" >Commerce</option>
                          <option value="compsca" >Computer Science &amp; Application</option>
                          <option value="ecoenv" >Ecology &amp; Environmental Science</option>
                          <option value="eco" >Economics</option>
                          <option value="engc" >English</option>
                          <option value="eng" >English Communication</option>
                          <option value="geneng" >General English</option>
                          <option value="geo" >Geology</option>
                          <option value="hist" >History</option>
                          <option value="math" >Mathematics</option>
                          <option value="mil" >MIL</option>
                          <option value="phil" >Philosophy</option>
                          <option value="phy" >Physics</option>
                          <option value="polsc" >Political Science</option>
                          <option value="snsk" >Sanskrit</option>
                          <option value="stat" >Statistics</option>
                          <option value="zoo" >Zoology</option>
                  </select>
                  <select name="s_sem" id="semester">
                      <option hidden disabled selected value>Select Semester/Year</option>
                      <option value="1st">1st</option>
                      <option value="2nd">2nd</option>
                      <option value="3rd">3rd</option>
                      <option value="4th">4th</option>
                      <option value="5th">5th</option>
                      <option value="6th">6th</option>
                  </select>
                  <input type="password" placeholder="&#xf30d; Password" name="s_pass">
                  <input type="submit" class="submit-btn" name="register" value="Register">
              </form>
              <a href="slogin.php"><h4>login here</h4></a>
-->
              <div class="register-box" data-select2-id="21">
  <div class="register-logo">
    <a href="#"><b>Karimganj</b>College</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register as new User</p>

        <form action="" method="post" data-select2-id="20">
        <div class="input-group mb-3">
          <input type="text" name="s_name" class="form-control" placeholder="Full name" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="s_roll" class="form-control" placeholder="College Roll" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="s_email" class="form-control" placeholder="Email ID" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="form-group">
          <select class="form-control select2bs4 select2-hidden-accessible" name="type" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
            <option selected="selected" disabled="" data-select2-id="3">Select Type</option>
            <option value="Hons">Honours</option>
            <option value="Pass">Pass</option>
           
          </select><span class="select2 select2-container select2-container--bootstrap4 select2-container--below" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-stream-j0-container"><span class="select2-selection__rendered" id="select2-stream-j0-container" role="textbox" aria-readonly="true" title="Science">Science</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
        </div>
        <div class="form-group">
          <select class="form-control select2bs4 select2-hidden-accessible" name="s_sem" style="width: 100%;" data-select2-id="4" tabindex="-1" aria-hidden="true">
          <option hidden disabled selected value>Select Semester/Year</option>
                      <option value="1st">1st</option>
                      <option value="2nd">2nd</option>
                      <option value="3rd">3rd</option>
                      <option value="4th">4th</option>
                      <option value="5th">5th</option>
                      <option value="6th">6th</option>
          </select><span class="select2 select2-container select2-container--bootstrap4 select2-container--below" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-semyear-7s-container"><span class="select2-selection__rendered" id="select2-semyear-7s-container" role="textbox" aria-readonly="true" title="Select Semester/Year">Select Semester/Year</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
        </div>
        <div class="form-group">
          <select class="form-control select2bs4 select2-hidden-accessible" name="s_dept" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
            <option selected="selected" disabled="" data-select2-id="9">Select CORE / DSE / CORE1</option>
                          <option value="accnt" data-select2-id="179">Accountancy</option>
                          <option value="alteng" data-select2-id="180">Alternative English</option>
                          <option value="arab" data-select2-id="181">Arabic</option>
                          <option value="audcg" data-select2-id="182">Auditing and Corporate Governance</option>
                          <option value="bnkin" data-select2-id="183">Banking and Insurance</option>
                          <option value="bngc" data-select2-id="184">Bengali</option>
                          <option value="bng" data-select2-id="185">Bengali Communication</option>
                          <option value="bio" data-select2-id="186">Biology</option>
                          <option value="biotech" data-select2-id="187">Biotechnology</option>
                          <option value="bot" data-select2-id="188">Botany</option>
                          <option value="bcomm" data-select2-id="189">Business Communication</option>
                          <option value="blw" data-select2-id="190">Business Law</option>
                          <option value="bmt" data-select2-id="191">Business Mathematics</option>
                          <option value="bmst" data-select2-id="192">Business Mathematics &amp; Statistics</option>
                          <option value="bom" data-select2-id="193">Business Organisation &amp; Management</option>
                          <option value="brmp" data-select2-id="194">Business Research Methods and Project Work</option>
                          <option value="bst" data-select2-id="195">Business Statistics</option>
                          <option value="bsstud" data-select2-id="196">Business Studies</option>
                          <option value="btpm" data-select2-id="197">Business Tax Procedures &amp; Management</option>
                          <option value="chem" data-select2-id="198">Chemistry</option>
                          <option value="cmstcomm" data-select2-id="199">CMST</option>
                          <option value="comlaw" data-select2-id="200">Company Law</option>
                          <option value="compa" data-select2-id="201">Computer Application</option>
                          <option value="cab" data-select2-id="202">Computer Applications in Business</option>
                          <option value="compsc" data-select2-id="203">Computer Science</option>
                          <option value="conac" data-select2-id="204">Consumer Affairs &amp; Customer Care</option>
                          <option value="cacc" data-select2-id="205">Corporate Accounting</option>
                          <option value="claw" data-select2-id="206">Corporate Laws</option>
                          <option value="ctp" data-select2-id="207">Corporate Tax Planning</option>
                          <option value="costac" data-select2-id="208">Cost Accounting</option>
                          <option value="ecomm" data-select2-id="209">E-Commerce</option>
                          <option value="ecoenv" data-select2-id="210">Ecology &amp; Environmental Science</option>
                          <option value="eco" data-select2-id="211">Economics</option>
                          <option value="engc" data-select2-id="212">English</option>
                          <option value="eng" data-select2-id="213">English Communication</option>
                          <option value="ent" data-select2-id="214">Entrepreneurship</option>
                          <option value="evs" data-select2-id="215">Environmental Studies (EVS)</option>
                          <option value="facc" data-select2-id="216">Financial Accounting</option>
                          <option value="fmis" data-select2-id="217">Financial Markets, Institutions and Financial Serv</option>
                          <option value="ffm" data-select2-id="218">Fundamentals of Financial Management</option>
                          <option value="foi" data-select2-id="219">Fundamentals of Investment</option>
                          <option value="geneng" data-select2-id="220">General English</option>
                          <option value="geo" data-select2-id="221">Geology</option>
                          <option value="hist" data-select2-id="222">History</option>
                          <option value="hrm" data-select2-id="223">Human Resource Management</option>
                          <option value="itlp" data-select2-id="224">Income Tax Law &amp; Practice</option>
                          <option value="indeco" data-select2-id="225">Indian Economy</option>
                          <option value="itlaw" data-select2-id="226">Indirect Tax Law</option>
                          <option value="irll" data-select2-id="227">Industrial Relations &amp; Labour Laws</option>
                          <option value="ibs" data-select2-id="228">International Business</option>
                          <option value="maeco" data-select2-id="229">Macro Economics</option>
                          <option value="maacc" data-select2-id="230">Management Accounting</option>
                          <option value="mpa" data-select2-id="231">Management Practice &amp; Application</option>
                          <option value="math" data-select2-id="232">Mathematics</option>
                          <option value="meco" data-select2-id="233">Micro Economics</option>
                          <option value="mil" data-select2-id="234">MIL</option>
                          <option value="Omsp" data-select2-id="235">Office Management and Secretarial Practice</option>
                          <option value="psasale" data-select2-id="236">Personal Selling &amp; Salesmanship</option>
                          <option value="phil" data-select2-id="237">Philosophy</option>
                          <option value="phy" data-select2-id="238">Physics</option>
                          <option value="polsc" data-select2-id="239">Political Science</option>
                          <option value="pom" data-select2-id="240">Principles of Marketing</option>
                          <option value="snsk" data-select2-id="241">Sanskrit</option>
                          <option value="stat" data-select2-id="242">Statistics</option>
                          <option value="zoo" data-select2-id="243">Zoology</option>
                      </select><span class="select2 select2-container select2-container--bootstrap4 select2-container--below" dir="ltr" data-select2-id="8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-department-i3-container"><span class="select2-selection__rendered" id="select2-department-i3-container" role="textbox" aria-readonly="true" title="Computer Application">Computer Application</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
        </div>
        <div class="form-group">
          <select class="form-control select2bs4 select2-hidden-accessible" name="ss" style="width: 100%;" data-select2-id="10" tabindex="-1" aria-hidden="true">
            <option selected="selected" disabled="" data-select2-id="12">Select GE (not required for 3rd year)</option>
                          <option value="accnt" data-select2-id="95">Accountancy</option>
                          <option value="alteng" data-select2-id="96">Alternative English</option>
                          <option value="arab" data-select2-id="97">Arabic</option>
                          <option value="audcg" data-select2-id="98">Auditing and Corporate Governance</option>
                          <option value="bnkin" data-select2-id="99">Banking and Insurance</option>
                          <option value="bngc" data-select2-id="100">Bengali</option>
                          <option value="bng" data-select2-id="101">Bengali Communication</option>
                          <option value="bio" data-select2-id="102">Biology</option>
                          <option value="biotech" data-select2-id="103">Biotechnology</option>
                          <option value="bot" data-select2-id="104">Botany</option>
                          <option value="botbio" data-select2-id="105">Botany &amp; Biotechnology</option>
                          <option value="bcomm" data-select2-id="106">Business Communication</option>
                          <option value="blw" data-select2-id="107">Business Law</option>
                          <option value="bmt" data-select2-id="108">Business Mathematics</option>
                          <option value="bmst" data-select2-id="109">Business Mathematics &amp; Statistics</option>
                          <option value="bom" data-select2-id="110">Business Organisation &amp; Management</option>
                          <option value="brmp" data-select2-id="111">Business Research Methods and Project Work</option>
                          <option value="bst" data-select2-id="112">Business Statistics</option>
                          <option value="bsstud" data-select2-id="113">Business Studies</option>
                          <option value="btpm" data-select2-id="114">Business Tax Procedures &amp; Management</option>
                          <option value="chem" data-select2-id="115">Chemistry</option>
                          <option value="cmstcomm" data-select2-id="116">CMST</option>
                          <option value="comlaw" data-select2-id="117">Company Law</option>
                          <option value="compa" data-select2-id="118">Computer Application</option>
                          <option value="cab" data-select2-id="119">Computer Applications in Business</option>
                          <option value="compsc" data-select2-id="120">Computer Science</option>
                          <option value="compsca" data-select2-id="121">Computer Science &amp; Application</option>
                          <option value="conac" data-select2-id="122">Consumer Affairs &amp; Customer Care</option>
                          <option value="cacc" data-select2-id="123">Corporate Accounting</option>
                          <option value="claw" data-select2-id="124">Corporate Laws</option>
                          <option value="ctp" data-select2-id="125">Corporate Tax Planning</option>
                          <option value="costac" data-select2-id="126">Cost Accounting</option>
                          <option value="ecomm" data-select2-id="127">E-Commerce</option>
                          <option value="ecoenv" data-select2-id="128">Ecology &amp; Environmental Science</option>
                          <option value="eco" data-select2-id="129">Economics</option>
                          <option value="engc" data-select2-id="130">English</option>
                          <option value="eng" data-select2-id="131">English Communication</option>
                          <option value="ent" data-select2-id="132">Entrepreneurship</option>
                          <option value="evs" data-select2-id="133">Environmental Studies (EVS)</option>
                          <option value="facc" data-select2-id="134">Financial Accounting</option>
                          <option value="fmis" data-select2-id="135">Financial Markets, Institutions and Financial Serv</option>
                          <option value="ffm" data-select2-id="136">Fundamentals of Financial Management</option>
                          <option value="foi" data-select2-id="137">Fundamentals of Investment</option>
                          <option value="geneng" data-select2-id="138">General English</option>
                          <option value="geo" data-select2-id="139">Geology</option>
                          <option value="hist" data-select2-id="140">History</option>
                          <option value="hrm" data-select2-id="141">Human Resource Management</option>
                          <option value="itlp" data-select2-id="142">Income Tax Law &amp; Practice</option>
                          <option value="indeco" data-select2-id="143">Indian Economy</option>
                          <option value="itlaw" data-select2-id="144">Indirect Tax Law</option>
                          <option value="irll" data-select2-id="145">Industrial Relations &amp; Labour Laws</option>
                          <option value="ibs" data-select2-id="146">International Business</option>
                          <option value="maeco" data-select2-id="147">Macro Economics</option>
                          <option value="maacc" data-select2-id="148">Management Accounting</option>
                          <option value="mpa" data-select2-id="149">Management Practice &amp; Application</option>
                          <option value="math" data-select2-id="150">Mathematics</option>
                          <option value="meco" data-select2-id="151">Micro Economics</option>
                          <option value="mil" data-select2-id="152">MIL</option>
                          <option value="Omsp" data-select2-id="153">Office Management and Secretarial Practice</option>
                          <option value="psasale" data-select2-id="154">Personal Selling &amp; Salesmanship</option>
                          <option value="phil" data-select2-id="155">Philosophy</option>
                          <option value="phy" data-select2-id="156">Physics</option>
                          <option value="polsc" data-select2-id="157">Political Science</option>
                          <option value="pom" data-select2-id="158">Principles of Marketing</option>
                          <option value="snsk" data-select2-id="159">Sanskrit</option>
                          <option value="stat" data-select2-id="160">Statistics</option>
                          <option value="zoo" data-select2-id="161">Zoology</option>
                      </select><span class="select2 select2-container select2-container--bootstrap4 select2-container--below" dir="ltr" data-select2-id="11" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-pass-ma-container"><span class="select2-selection__rendered" id="select2-pass-ma-container" role="textbox" aria-readonly="true" title="Cost Accounting">Cost Accounting</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
        </div>
        <div class="form-group">
          <select class="form-control select2bs4 select2-hidden-accessible" name="elective1" style="width: 100%;" data-select2-id="13" tabindex="-1" aria-hidden="true">
            <option selected="selected" disabled="" data-select2-id="15">Select SEC (not required for 1st and 3rd year)</option>
                          <option value="accnt" data-select2-id="27">Accountancy</option>
                          <option value="alteng" data-select2-id="28">Alternative English</option>
                          <option value="arab" data-select2-id="29">Arabic</option>
                          <option value="audcg" data-select2-id="30">Auditing and Corporate Governance</option>
                          <option value="bnkin" data-select2-id="31">Banking and Insurance</option>
                          <option value="bngc" data-select2-id="32">Bengali</option>
                          <option value="bng" data-select2-id="33">Bengali Communication</option>
                          <option value="bio" data-select2-id="34">Biology</option>
                          <option value="biotech" data-select2-id="35">Biotechnology</option>
                          <option value="bot" data-select2-id="36">Botany</option>
                          <option value="botbio" data-select2-id="37">Botany &amp; Biotechnology</option>
                          <option value="bcomm" data-select2-id="38">Business Communication</option>
                          <option value="blw" data-select2-id="39">Business Law</option>
                          <option value="bmt" data-select2-id="40">Business Mathematics</option>
                          <option value="bmst" data-select2-id="41">Business Mathematics &amp; Statistics</option>
                          <option value="bom" data-select2-id="42">Business Organisation &amp; Management</option>
                          <option value="brmp" data-select2-id="43">Business Research Methods and Project Work</option>
                          <option value="bst" data-select2-id="44">Business Statistics</option>
                          <option value="bsstud" data-select2-id="45">Business Studies</option>
                          <option value="btpm" data-select2-id="46">Business Tax Procedures &amp; Management</option>
                          <option value="chem" data-select2-id="47">Chemistry</option>
                          <option value="cmstcomm" data-select2-id="48">CMST</option>
                          <option value="comlaw" data-select2-id="49">Company Law</option>
                          <option value="compa" data-select2-id="50">Computer Application</option>
                          <option value="cab" data-select2-id="51">Computer Applications in Business</option>
                          <option value="compsc" data-select2-id="52">Computer Science</option>
                          <option value="compsca" data-select2-id="53">Computer Science &amp; Application</option>
                          <option value="conac" data-select2-id="54">Consumer Affairs &amp; Customer Care</option>
                          <option value="cacc" data-select2-id="55">Corporate Accounting</option>
                          <option value="claw" data-select2-id="56">Corporate Laws</option>
                          <option value="ctp" data-select2-id="57">Corporate Tax Planning</option>
                          <option value="costac" data-select2-id="58">Cost Accounting</option>
                          <option value="ecomm" data-select2-id="59">E-Commerce</option>
                          <option value="ecoenv" data-select2-id="60">Ecology &amp; Environmental Science</option>
                          <option value="eco" data-select2-id="61">Economics</option>
                          <option value="engc" data-select2-id="62">English</option>
                          <option value="eng" data-select2-id="63">English Communication</option>
                          <option value="ent" data-select2-id="64">Entrepreneurship</option>
                          <option value="evs" data-select2-id="65">Environmental Studies (EVS)</option>
                          <option value="facc" data-select2-id="66">Financial Accounting</option>
                          <option value="fmis" data-select2-id="67">Financial Markets, Institutions and Financial Serv</option>
                          <option value="ffm" data-select2-id="68">Fundamentals of Financial Management</option>
                          <option value="foi" data-select2-id="69">Fundamentals of Investment</option>
                          <option value="geneng" data-select2-id="70">General English</option>
                          <option value="geo" data-select2-id="71">Geology</option>
                          <option value="hist" data-select2-id="72">History</option>
                          <option value="hrm" data-select2-id="73">Human Resource Management</option>
                          <option value="itlp" data-select2-id="74">Income Tax Law &amp; Practice</option>
                          <option value="indeco" data-select2-id="75">Indian Economy</option>
                          <option value="itlaw" data-select2-id="76">Indirect Tax Law</option>
                          <option value="irll" data-select2-id="77">Industrial Relations &amp; Labour Laws</option>
                          <option value="ibs" data-select2-id="78">International Business</option>
                          <option value="maeco" data-select2-id="79">Macro Economics</option>
                          <option value="maacc" data-select2-id="80">Management Accounting</option>
                          <option value="mpa" data-select2-id="81">Management Practice &amp; Application</option>
                          <option value="math" data-select2-id="82">Mathematics</option>
                          <option value="meco" data-select2-id="83">Micro Economics</option>
                          <option value="mil" data-select2-id="84">MIL</option>
                          <option value="Omsp" data-select2-id="85">Office Management and Secretarial Practice</option>
                          <option value="psasale" data-select2-id="86">Personal Selling &amp; Salesmanship</option>
                          <option value="phil" data-select2-id="87">Philosophy</option>
                          <option value="phy" data-select2-id="88">Physics</option>
                          <option value="polsc" data-select2-id="89">Political Science</option>
                          <option value="pom" data-select2-id="90">Principles of Marketing</option>
                          <option value="snsk" data-select2-id="91">Sanskrit</option>
                          <option value="stat" data-select2-id="92">Statistics</option>
                          <option value="zoo" data-select2-id="93">Zoology</option>
                      </select><span class="select2 select2-container select2-container--bootstrap4 select2-container--below" dir="ltr" data-select2-id="14" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-elective1-sb-container"><span class="select2-selection__rendered" id="select2-elective1-sb-container" role="textbox" aria-readonly="true" title="Select SEC (not required for 1st and 3rd year)">Select SEC (not required for 1st and 3rd year)</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
        </div>        
        <div class="form-group">
          <select class="form-control select2bs4 select2-hidden-accessible" name="elective2" style="width: 100%;" data-select2-id="16" tabindex="-1" aria-hidden="true">
            <option selected="selected" disabled="" data-select2-id="18">Select AECC (not required for 2nd and 3rd year)</option>
                          <option value="bng" data-select2-id="22">Bengali Communication</option>
                          <option value="bcomm" data-select2-id="23">Business Communication</option>
                          <option value="eng" data-select2-id="24">English Communication</option>
                          <option value="evs" data-select2-id="25">Environmental Studies (EVS)</option>
                      </select><span class="select2 select2-container select2-container--bootstrap4 select2-container--above" dir="ltr" data-select2-id="17" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-elective2-43-container"><span class="select2-selection__rendered" id="select2-elective2-43-container" role="textbox" aria-readonly="true" title="Select AECC (not required for 2nd and 3rd year)">Select AECC (not required for 2nd and 3rd year)</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="clp" class="form-control" placeholder="Subject5" value="Computer Literacy Programme (CLP)" disabled="">
        </div>
        <div class="input-group mb-3">
          <input type="text" name="phone" class="form-control" placeholder="Contact Number">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="s_pass" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Request to Sign Up</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      
      <a href="login.php" class="text-center">Already have an Account</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
     </body>
</html>