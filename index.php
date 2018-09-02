<?php
require("include/config.php");
require("include/function.php");
require("include/lang.php");
session_start();
if(!isset($_SESSION['user'])){
header("Location: $login_patch");
exit();
} else
{}


?>
