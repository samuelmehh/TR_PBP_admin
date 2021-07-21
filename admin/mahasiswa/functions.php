<?php
	require_once "config.php";
	
	function check_login($user="", $pass=""){
		global $con;
		
		$sql = "select nim from tbl_user where nim = '$user' and password = '$pass'";
		if($query = mysqli_query($con,$sql)){
			if(mysqli_num_rows($query) > 0){
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	
	function select_data($user=""){
		global $con;
		
		$hasil = array();
		$hasil['nama'] = "";
		$hasil['ipk'] = "";
		$hasil['asal'] = "";
		
		$sql = "select * from tbl_data where nim = '$user'";
		if($query = mysqli_query($con,$sql)){
			if(mysqli_num_rows($query) > 0){
				$rs = mysqli_fetch_array($query);
				$hasil['nama'] = $rs['Nama'];
				$hasil['ipk'] = $rs['IPK'];
				$hasil['asal'] = $rs['Asal'];
			}
		}
		
		return $hasil;
	}
?>
