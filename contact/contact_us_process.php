<?php

$name_error = $email_error ="";
$name = $email ="";

if($_SERVER["REQUEST_METHOD"]== "POST")
{
	if(empty($_POST["name"]))
		$name_error= "Name is required";
	else
	{
		$name = test_input($_POST["name"]);
		if(!preg_match("/^[a-zA-Z ]*$/", $name))
			$name_error= "Only letters and white spaces allowed";
	}

	if(empty($_POST["email"]))
		$name_error= "Email is required";
	else
	{
		$name = test_input($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			$email_error= "Invalid email format";
	}
}
?>