<html>
<head>
<title>User login</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css"/>
<link rel="stylesheet" type="text/css" href="../style/user_login.css">
</head>
<body>
      <div class="main">
        <div class="navbar">
          <img src="../logo.png">&nbsp
          <span> KARIMGANJ COLLEGE</span><br>&nbsp
          <span class="logo">Online Examination Portal</span>
          <a href="javascript:login()">LOGIN</a>
          <a href="javascript:register()">REGISTER</a>
        </div>
          <div class="form-box">
            <form id="login" class="box" onclick="login()" method="post" action="slogin.php">
              <h1>Login</h1>
                  <input type="number" placeholder="&#xf2c1; Unique Id" name="sid" required>
                  <input type="email" placeholder="&#xf1fa; Email" name="semail" required>
                  <input type="password" placeholder="&#xf30d; Password" name="spassword" required>
                  <input type="submit" class="submit-btn" name="login" value="Login">
              </form>
              <form id="register" class="box" onclick="register()" method="post" action="sregister.php">
                <h1>Register</h1>
                  <input type="text" placeholder="&#xf507; Full Name" name="sname" required>
                  <input type="number" placeholder="&#xf0e0; College Roll no." name="srollno" required>
                  <input type="email" placeholder="&#xf1fa; E-mail Id" name="semail" required>
                  <input type="number" placeholder="&#xf879; Phone No." name="sphone" required>
                  <select name="scourse" id="course" required>
                      <option hidden disabled selected value>Select Course</option>
                      <option value="BCA">BCA</option>
                      <option value="BCS Core">BCS Core</option>
                      <option value="BCS General">BCS General</option>
                      <option value="Chemistry Core">Chemistry Core</option>
                      <option value="Chemistry General">Chemistry General</option>
                      <option value="Physics Core">Physics Core</option>
                      <option value="Physics General">Physics General</option>
                      <option value="Zoology Core">Zoology Core</option>
                      <option value="Zoology General">Zoology General</option>
                      <option value="Bio-Technology Core">Bio-Technology Core</option>
                      <option value="Bio-Technology General">Bio-Technology General</option>
                  </select>
                  <select name="ssem" id="semester" required>
                      <option hidden disabled selected value>Select Semester/Year</option>
                      <option value="1st Year(1st Semester/2nd Semester)">1st Year(1st Semester/2nd Semester)</option>
                      <option value="2nd Year(3rd Semester/4th Semester)">2nd Year(3rd Semester/4th Semester)</option>
                      <option value="3rd Year(5th Semester/6th Semester)">3rd Year(5th Semester/6th Semester)</option>
                  </select>
                  <input type="password" placeholder="&#xf30d; Password" name="spassword" required>
                  <input type="submit" class="submit-btn" name="register" value="Register">
              </form>
             
              
          </div>
     </div>
       
       <script>

           function register(){
              document.getElementById("login").style.display="none";
              document.getElementById("register").style.display="block";
           }
           function login(){
              document.getElementById("register").style.display="none";
              document.getElementById("login").style.display="block";
           }
       </script>

</body>
</html>