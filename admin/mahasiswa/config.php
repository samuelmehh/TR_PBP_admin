<?php 

	session_start();
	error_reporting(0);
	ini_set('display_errors', 0);

	$configdb= array();
	$configdb['db']="db_mahasiswa_672018303";
	$configdb['host']="localhost";
	$configdb['user']="root";
	$configdb['pass']="";

	$con = mysqli_connect($configdb['host'],$configdb['user'],$configdb['pass'],$configdb['db']);
	if (mysqli_connect_errno()) {
		die("Failed connect db : " . mysqli_connect_error());
	}

	





 ?>