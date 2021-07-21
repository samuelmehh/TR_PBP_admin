<?php
	require_once "config.php";
    
    
	function check_login ($user="", $pass="") {

		global $con;

		$hasil = false;

		if ($user != "" ) $sql = "SELECT * FROM tbl_user WHERE Dosen = :user AND `Password` = :pass " ;
		else $sql = "SELECT * FROM tbl_user";

			try {
            	$stmt = $con->prepare($sql);
            		if ($user != "") {
						$stmt->bindValue(':user', $user, PDO::PARAM_STR);
						$stmt->bindValue(':pass', $pass, PDO::PARAM_STR);
					}

            		if ($stmt->execute()) {
                		$stmt->setFetchMode(PDO::FETCH_ASSOC);
        				$rs = $stmt->fetchAll();
        		
        				if (($rs) != null) {
							$i = 0;
							return true;
        				}
        			}
        		} catch(Exception $e) {
						echo 'Error select_data : '.$e->getMessage();
					}
				return $hasil;
			}


		function select_data($user="") {
				global $con;

				$hasil = array();
		if ($user != "") $sql = "SELECT * FROM tbl_dosen WHERE kode = :user";
		else $sql = "SELECT * FROM tbl_dosen";

		try {
            $stmt = $con->prepare($sql);
            if ($user != "") {$stmt->bindValue(':user', $user, PDO::PARAM_STR);}
            if ($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
        		$rs = $stmt->fetchAll();
        		
        		if ($rs != null) {
        			$i = 0;
        			foreach ($rs as $val) {
        				$hasil[$i]['kode'] = $val['Kode'];
        				$hasil[$i]['nama'] = $val['Nama'];
						$hasil[$i]['prodi'] = $val['Prodi'];
						$hasil[$i]['fakultas'] = $val['Fakultas'];
						$i++;
        			}
        		}
        	}else{
				echo "error";
			}	
        	} catch(Exception $e) {
				echo 'Error select_data : '.$e->getMessage();
			}

			return $hasil;
		}




		function select_jadwal($nim="") {
			global $con;
			$hasil = array();
			if ($nim != "") $sql = "SELECT * FROM tbl_jadwal WHERE kode = :user";
			else $sql = "SELECT * FROM tbl_jadwal";

			try {
            	$stmt = $con->prepare($sql);
            	if ($nim != "") $stmt->bindValue(':user', $nim, PDO::PARAM_STR);

            	if ($stmt->execute()) {
                	$stmt->setFetchMode(PDO::FETCH_ASSOC);
        			$rs = $stmt->fetchAll();
        		
        		if ($rs != null) {
        			$i = 0;
        			foreach ($rs as $val) {
					
						$hasil[$i]['kodem'] = $val['kodeM'];
						$hasil[$i]['kode'] = $val['Kode'];
						$hasil[$i]['matakuliah'] = $val['Matakuliah'];
						$hasil[$i]['jam'] = $val['Jam'];
						$hasil[$i]['hari'] = $val['Hari'];
						$hasil[$i]['ruang'] = $val['Ruang'];
						$i++;
						
        			}
        		}
        	}
        	} catch(Exception $e) {
				echo 'Error select_data : '.$e->getMessage();
			}
			return $hasil;
		}





		function select_ms($nim="") {
			global $con;
			$hasil = array();
			if ($nim != "") $sql = "SELECT * FROM tbl_mahasiswa WHERE kodeM= :kodeM";
			else $sql = "SELECT * FROM tbl_mahasiswa";

			try {
            	$stmt = $con->prepare($sql);
            	if ($nim != "") $stmt->bindValue(':kodeM', $nim, PDO::PARAM_STR);

            	if ($stmt->execute()) {
                	$stmt->setFetchMode(PDO::FETCH_ASSOC);
        			$rs = $stmt->fetchAll();
        		
        		if ($rs != null) {
        			$i = 0;
        			foreach ($rs as $val) {
					
						$hasil[$i]['kodeM'] = $val['KodeM'];
						$hasil[$i]['nim'] = $val['Nim'];
						$hasil[$i]['nama'] = $val['Nama'];
						$i++;
        			}
        		}
        	}
        	} catch(Exception $e) {
				echo 'Error select_data : '.$e->getMessage();
			}
			return $hasil;
		}


		function select_nilai($nim="") {
			global $con;
			$hasil = array();
			if ($nim != "") $sql = "SELECT * FROM tbl_nilai WHERE Nim= :Nim";
			else $sql = "SELECT * FROM tbl_nilai";

			try {
            	$stmt = $con->prepare($sql);
            	if ($nim != "") $stmt->bindValue(':Nim', $nim, PDO::PARAM_STR);

            	if ($stmt->execute()) {
                	$stmt->setFetchMode(PDO::FETCH_ASSOC);
        			$rs = $stmt->fetchAll();
        		
        		if ($rs != null) {
        			$i = 0;
        			foreach ($rs as $val) {
					
						$hasil[$i]['kodeM'] = $val['KodeM'];
						$hasil[$i]['nim'] = $val['Nim'];
						$hasil[$i]['nama'] = $val['Nama'];
						$hasil[$i]['nilai'] = $val['Nilai'];
						$i++;
        			}
        		}
        	}
        	} catch(Exception $e) {
				echo 'Error select_data : '.$e->getMessage();
			}
			return $hasil;
		}



		function update_data($nim="",$data) {
			global $con;
	
			if ($data != null) {
				try {
					$sql = "UPDATE tbl_data SET NIM = :nim, Nama = :Nama, Nilai = :nilai WHERE NIM = :nim";
					$stmt = $con->prepare($sql);
					$stmt->bindValue(':nim', $nim, PDO::PARAM_STR);
					$stmt->bindValue(':nama', $data['nama'], PDO::PARAM_STR);
					$stmt->bindValue(':nilai', $data['nilai'], PDO::PARAM_STR);
					
	
					if ($stmt->execute()) return true;
					else return false;
				} catch(Exception $e) {
					echo 'Error update_data : '.$e->getMessage();
					return false;
				}
			} else {
				return false;
			}
		}
	

		function delete_data($nim="") {
			global $con;
	
			if ($nim != "") {
				try {
					$sql = "DELETE FROM tbl_data WHERE NIM = :nim";
					$stmt = $con->prepare($sql);
					$stmt->bindValue(':nim', $nim, PDO::PARAM_STR);
					if ($stmt->execute()) $ok = true;
					else return false;
	
					$sql = "DELETE FROM tbl_user WHERE NIM = :nim";
					$stmt = $con->prepare($sql);
					$stmt->bindValue(':nim', $nim, PDO::PARAM_STR);
					if ($stmt->execute()) return true;
					else return false;
				} catch(Exception $e) {
					echo 'Error delete_data : '.$e->getMessage();
					return false;
				}
			} else {
				return false;
			}
		}
	


?>
