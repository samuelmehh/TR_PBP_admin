<?php

	session_start();
	session_destroy();
	echo "	<script>window.alert('Sukses Logout!');
          	window.location.href = '../index.php';</script>";
	
?>