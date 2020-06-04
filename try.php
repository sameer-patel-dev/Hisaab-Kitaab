<?php
		session_start();
		$con = mysqli_connect("localhost","root",""); 
		mysqli_select_db($con, "project_inv");
		if(isset($_POST["StoreBill"]))
		{
			$insert = "INSERT into ".$_SESSION["Username"]."(customerName,netTotal,paid,due) VALUES ('$_POST[cust_name]','$_POST[net_total]','$_POST[paid]','$_POST[due]')";
			mysqli_query($con,$insert);
			header('location:dashboard.php');
		}
		mysqli_close($con); 
	?>