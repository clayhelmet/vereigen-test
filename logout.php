<?php
error_reporting(0); // Report all types of errors

include("config.php");
session_start();
unset($_SESSION["id"]);
unset($_SESSION["username"]);

header("Location: index.php");
exit();
?>
