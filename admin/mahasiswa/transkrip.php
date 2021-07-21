<?php require_once "components/header.php"; ?>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Transkrip Page</h1>
</div>

<div class="container">
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead class="thead-light">
			<tr>
				<th class="text-center">No</th>
				<th class="text-center">Kode</th>
				<th class="text-center">Matakuliah</th>
				<th class="text-center">SKS</th>
				<th class="text-center">Nilai</th>
				<th class="text-center">AK</th>
				<th class="text-center">Tahun Ambil</th>
			</tr>
			</thead>
			
		<?php
		/* for ($x = 0; $x<count($_SESSION['nilai']['no']); $x++){
			echo '<tr>
					<td>'.$_SESSION['nilai']['no'][$x].'</td>
					<td>'.$_SESSION['nilai']['kode'][$x].'</td>
					<td>'.$_SESSION['nilai']['matkul'][$x].'</td>	
					<td>'.$_SESSION['nilai']['sks'][$x].'</td>
					<td>'.$_SESSION['nilai']['nilai'][$x].'</td>
					<td>'.$_SESSION['nilai']['ak'][$x].'</td>
					<td>'.$_SESSION['nilai']['thn'][$x].'</td>
				</tr>';
		} */
		echo '<tr>
				<td></td><td>Total</td>
				<td></td><td></td>
				<td></td><td></td><td></td>
			</tr>
			
			<tr>
				<td></td><td>IPK</td>
				<td></td><td></td>
				<td></td><td></td><td></td>
			</tr>';
		?>
		</table>
		</table>
	</div>
</div>

<?php require_once "components/footer.php"; ?>