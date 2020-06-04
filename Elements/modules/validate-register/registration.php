
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
		$signup = "select * from user where email = '$_POST[email]' OR username = '$_POST[Username]' ";

		$signupresult = mysqli_query($con, $signup);

		$signupnum = mysqli_num_rows($signupresult);

		if($signupnum == 1)
		{
			header('location:../login/login.php');
		}
		else
		{
			if(!empty($_POST['Username']) || !empty($_POST['password']) || !empty($_POST['email']))
			{
				$_SESSION["Username"] = $_POST["Username"];
				$sql = "INSERT INTO user (username, password, email) VALUES ('$_POST[Username]','$_POST[Password]','$_POST[email]')";
				mysqli_query($con,$sql);
				$create = "CREATE TABLE ".$_POST["Username"]." ( customerName varchar(15), netTotal int, paid int, due int)"; 
				mysqli_query($con,$create); 
				header('location:../register/register.php');
				//header('location: ../../../dashboard.php');
				//header('location:../login/login.php');
			}
			else
				header('location:../login/login.php');
		}
	}
	// else
	// {
	
	// 	header('location:../login/login.php');
	// }
mysqli_close($con); 
?>


