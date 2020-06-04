<?php

include_once("./database/constants.php");
if (isset($_SESSION["Username"])) {
	session_destroy();
}
header("location:".DOMAIN."/Elements/");

?>