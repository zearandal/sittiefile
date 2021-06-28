<?php
	$conn = new mysqli('localhost', 'root', '', 'capstone');
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>