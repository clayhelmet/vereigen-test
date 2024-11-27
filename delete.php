<?php
require_once('config.php');

 $del_id = $_GET['id'];

$fetch = "DELETE from request WHERE id={$del_id}";
$query=mysqli_query($conn,$fetch);

header("Location:http://localhost:8080/web_test/dashboard.php");

mysqli_close($conn);
?>
