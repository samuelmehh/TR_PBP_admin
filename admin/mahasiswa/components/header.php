<?php 
	session_start();

	if (!isset($_SESSION['user'])) {
	 	echo "	<script>window.alert('Silahkan login terlebih dahulu!');
          		window.location.href = 'login.php';</script>";
	 } 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-4.5.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">SIASAT</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="index.php">Home</a>
    <a class="p-2 text-dark" href="kst.php">KST</a>
    <a class="p-2 text-dark" href="jadwal.php">Jadwal Kuliah</a>
    <a class="p-2 text-dark" href="regis.php">Registrasi Matakuliah</a>
    <a class="p-2 text-dark" href="transkrip.php">Transkrip Nilai</a>

  </nav>
  <a class="btn btn-outline-primary" href="logout.php">Log Out</a>
</div>