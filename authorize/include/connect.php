<?php 
	//mysqli_connect
	

	$connect = mysqli_connect('localhost','mysql','mysql','test');

	if (!$connect) {
		die('Error connect to database');
	}
?>