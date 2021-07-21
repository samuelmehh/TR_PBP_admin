<!DOCTYPE html>
<html>
	<head>
		<title>Login Form</title>
		<link rel="stylesheet" type="text/css" href="assets/bootstrap-4.5.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style-login.css">
	</head>

	<body class="text-center">
		<?php  
			require_once "fungsi.php";
			$alert = "";

			if (isset($_SESSION['user'])) {
				header("location: index.php");
			} else {
					if(isset($_POST['login'])){
						$nim = $_POST['nim'];
						$pass = $_POST['pass'];
				
				
				
						if(check_login($nim,$pass)) {
								$_SESSION['user'] = $nim;
								$_SESSION['data'] = select_data($nim);
								echo "	<script>window.alert('Sukses Login!');
          								window.location.href = 'index.php';</script>";
							} else {
								$alert = "Password Salah!";
							}
				
					}

					echo '
					<form class="form-signin" method="post">
						<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>';

						if ($alert != "") {
							echo '
								<div class="alert alert-danger" role="alert">
							  		'.$alert.'
								</div>
							';
						}

						echo '
							<input id="inputEmail" name="nim" class="form-control mb-3" placeholder="Masukan Kode Dosen" required autofocus>
							<input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Masukan Password" required>
							<button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
					</form>
					';
				}
		
		?>

		<script type="text/javascript" src="assets/jquery-3.5.1/jquery-3.5.1.slim.min.js"></script>
		<script type="text/javascript" src="assets/bootstrap-4.5.3/js/bootstrap.min.js"></script>
	</body>
</html>
