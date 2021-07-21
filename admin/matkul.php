<!DOCTYPE html>
<html>
<head> 
<title>Menampilkan data dari Database</title>
<style>
table, th, td {
    border: 1px solid black;
   
}
</style>
</head>
<body>
<?php
include "koneksi.php";
$query="SELECT * FROM matkul";
$result = mysqli_query($koneksi, $query);

echo "<style>
table, th, td {
    border: 0.5px solid black;
   
}
</style>";

echo "<b>Matkul</b> <br><br>";
if(mysqli_num_rows($result) > 0)
{
	echo "<table>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Kode</th>";
                echo "<th>Nama matkul</th>";
                echo "<th>Hari</th>";
    			echo "<th>Jam</th>";
    			echo "<th>Ruang</th>";
    			echo "<th>Dosen</th>";
            echo "</tr>";
 while($row =mysqli_fetch_array($result))
 {
 	echo "<tr>";
  		echo "<td>" . $row["id"]."</td>";
  		echo "<td>" . $row["kode"]."</td>";
 	 	echo "<td>" . $row["nama_matkul"]. "</td>";
  		echo "<td>" . $row["hari"]."</td>";
  		echo "<td>" . $row["jam"]."</td>";
  		echo "<td>" . $row["ruang"]."</td>";
  		echo "<td>" . $row["dosen"]."</td>";
  	echo "</tr>";
 }
 echo "</table>";
}
?>

</body>
</html>