<?php 
require('C:\xampp\htdocs\myProject\conn.php');


$queryTable = "SELECT * FROM blog WHERE status = 'Draft'";
$sqlTable = mysqli_query($conn, $queryTable) or die( mysqli_error($conn));;

?>