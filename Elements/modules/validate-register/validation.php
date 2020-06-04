<?php 
	$con = mysqli_connect("localhost","root",""); 
	if (!$con)   
	{   
		die('Could not connect: ' . mysqli_error());   
	}  
	mysqli_select_db($con, "project_inv");

	if(isset($_POST['Username']))
	{
		session_start();
		$login = "select * from user where username = '$_POST[Username]' && password = '$_POST[Password]'";

		$loginresult = mysqli_query($con, $login);

		$loginnum = mysqli_num_rows($loginresult);

		if($loginnum == 1)
		{
			$_SESSION["Username"] = $_POST["Username"];
			mysqli_query($con,'UPDATE `user` SET `last_login` = now()');
			// $_SESSION["lastlogin"] = now();
 			//header('location:../dashboard/dashboard.php');
			header('location: ../../../dashboard.php');
		}
		else
		{
			header('location:../login/login.php');
		}
	}
	// else
	// {
	// 	header('location:../login/login.php');
	// }
mysqli_close($con); 
?>


