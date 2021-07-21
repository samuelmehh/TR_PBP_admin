<?php

	require_once "fungsi.php";
    require_once "header.php";
     
	if (!isset($_SESSION['user'])) {
		    header("Location: login.php");
       } else {
                $table_skr = '';
		 	    $data = select_ms($_GET['kodeM']);
		 	    foreach ($data as $key => $val) {
                    $table_skr .= '
                    <tr>   
                        <td>
                            <label></label>
                            <p><a class="p-2 text-dark" href="Input nilai.php?Nim='.$val['nim'].'">'.$val['nim'].'</p>
                        </td>
                        <td>
                            <label></label>
                            <p>'.$val['nama'].'</p>
                        </td>
                    </tr>';
                }
        
                if ($table_skr == "") {
				    $table_skr = '<tr class="table-danger"><th colspan="4"><center>NO DATA</center></th></tr>';
                }
         
            

                echo "<html>
		
	            <head>
	                <meta charset='utf-8'>
	                <meta name='viewport' content='width=device-width, initial-scale=1'>
	                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
	                <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
	                <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
	                <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
                </head>

	            <body>
	                <div class='pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center'>
                        <h1 class='display-4'> Mahasiswa</h1>
                    </div>

                    <div class='container'>
	                    <div class='table-responsive'>
		                    <table class='table'>                    
                                <tr>
                                    <td class='text-center'>NIM</td>
                                    <td class='text-center'>NAMA</td>
                                </tr>
                                $table_skr
                            </table>
                        </div>
                    </div>

	            </body>
            </html>";
        }	
?>
<?php require_once "footer.php"; ?>