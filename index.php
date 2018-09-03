<?php
session_start();
include("include/config.php");
include("include/function.php");
include("include/lang.php");

if(!isset($_SESSION['user'])){
header("Location: $login_patch");
exit();
} else
{}


?>
