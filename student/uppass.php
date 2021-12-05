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
	<title>Update Password</title>
	<link rel="stylesheet" type="text/css" href="style/reg.css">
</head>
<style>
h1{
    text-align: center;
    text-decoration: underline;
}
</style>
<body align="center">
	<span><h1>UPDATE PASSWORD</h1></span>
	<form method="post" class="box">
		<input type="text" name="spassword" value="<?php echo $user_data['spassword']; ?>">
		<input type="submit" name="update" value="Set Password">
	</form>

	<?php
	    if(isset($_POST['update'])){
	    	$password=$_POST['spassword'];

	    	$query="update studentlogin set spassword='$password' where sid='$user_data[sid]'";
            $data=mysqli_query($con,$query);
            if($data){
                 echo "<script>alert('Password updated successfully');window.location.href='profile.php';</script>";
            }
            else{
                 echo "Something went wrong";
            }
        }

	?>

</body>
</html>