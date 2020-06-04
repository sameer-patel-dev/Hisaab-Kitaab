<?php
        session_start();
        if(!isset($_SESSION['Username']))
        {
                header("location: validation.php");
        }
        $name=$_SESSION['Username'];
?>
<html>
<head>
<title>Profile of <?php echo $name;?></title>
</head>
<h1>Hello <?php echo $name;?></h1>
</html>