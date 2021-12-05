<?php

//function to check student login
function check_login($con)
{
	if(isset($_SESSION['sid']))
	{
		$id = $_SESSION['sid'];

		$query = "select * from studentlogin where sid = '$id'";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	
	//redirect to login
	header("Location: login.html");
	die;
}

//function to generate random unique id to validate student
function random_num($length)
{
	$text = "";
	if ($length < 5)            //checking if unique id is greater than five
	 {
	 	$length = 5;
	}

	$len = rand(4,$length);    //creating unique id 

	for($i=0; $i < $len; $i++)
	{
		$text .=rand(0,9);
	}

	return $text;
}