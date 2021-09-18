<?php
session_start();

    include("../dbconn.php");
    include("functions.php");
 
    $user_data = check_login($con);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update Profile Picture</title>
	<link rel="stylesheet" type="text/css" href="../style/reg.css">
</head>
<style>
h1{
    text-align: center;
    text-decoration: underline;
}
</style>
<body align="center">
	<span><h1>UPDATE PROFILE PICTURE</h1></span>
	<form method="post" enctype="multipart/form-data" class="box">
		<input type="file" name="spic" value="">
		<input type="submit" name="update" value="Update Image">
	</form>

	<?php
	if(isset($_POST['update'])) {
		$file=$_FILES['spic']['name'];
		$tempname=$_FILES['spic']['tmp_name'];
        $folder="image/.$file";
		
		move_uploaded_file($tempname,$folder);
		$query="update studentlogin set spic='$folder' where sid ='$user_data[sid]' ";
		$data=mysqli_query($con,$query);
		if($data){
			echo "<script>alert('Profile picture updated successfully');window.location.href='profile.php';</script>";
		}
		else{
			echo "Something went wrong";
		}
	}
	
    ?>
</body>
</html>