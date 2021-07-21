<?php
$koneksi = mysqli_connect("localhost","root","","tr_pbp");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>