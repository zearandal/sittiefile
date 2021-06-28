<?php 
require('C:\xampp\htdocs\myProject\conn.php');


$queryTable1 = "SELECT * FROM blog WHERE status = 'Post'";
$sqlTable1 = mysqli_query($conn, $queryTable1) or die( mysqli_error($conn));;

?>