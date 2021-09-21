<?php
session_start();

include("../dbconn.php");
include("functions.php");

$user_data = check_login($con);
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard - Student</title>
	<link rel="stylesheet" href="dashboard1.css">

	<link href="https://fonts.googleapis.com/css2?
	family=Roboto:wght@400;700&display=swap" rel="dashboard1.css">
</head>
	<body>
		<div class="container">
			<div class="logo">
			<img src="../logo.png" class="logo">
		    </div>
			<div class="navbar">
						<nav>
							<ul>
								<li><a href="">Log out</a></li>
							</ul>
						</nav>
                        <div class="uname">
                <span><?php echo $user_data['sname']; ?></span>
                <span class="upic"><?php echo $user_data['spic']; ?></span>
            </div>
			</div>
		<div class="row">
			<div class="col">
				<p class="a">Check the Latest Notice here</p>
				<a href=""><button type="button">NOTICE</button></a>
			</div>
			<div class="col">
				<a class="card card1" href="profile.php">
					<h1>PROFILE</h1>
				</a>
				<a class="card card2" href="exam.php">
					<h1>GIVE EXAMs</h1>
				</a>
				<a class="card card3" href="results.php">
					<h1>RESULTs</h1>
				</a>
				<a class="card card4" href="logout.php">
					<h1>-------</h1>
				</a>
			</div>
		</div>
	</div>
	</body>
</html>