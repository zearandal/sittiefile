<?php 
require('C:\xampp\htdocs\myProject\conn.php');

$queryTable = "SELECT * FROM db_save WHERE status = 'Draft' ";
$sqlTable = mysqli_query($conn, $queryTable);

while ($results =  mysqli_fetch_array($sqlTable)){
	echo $results['blog_title'];
}
?>