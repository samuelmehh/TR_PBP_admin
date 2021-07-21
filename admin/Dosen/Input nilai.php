<?php

	require_once "fungsi.php";
    require_once "header.php";
     
    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
    } else {
        $table_skr = '';
        $data = select_nilai($_GET['nim']);
        foreach ($data as $key => $val) {
           $table_skr .= '
           <tr>   
               <td>
                   <label></label>
                   <p><a >'.$val['nim'].'</p>
               </td>
               <td>
                   <label></label>
                   <p>'.$val['nama'].'</p>
               </td>
               <td>
               <label></label>
               <p>'.$val['nilai'].'</p>
           </td>
           </tr>';

        var_dump($nim);
        if ($nim != "") {
            if (isset($_POST['ganti'])) {
                $new_data['nilai'] = isset($_POST['nilai']) ? $_POST['nilai'] : "";

                if ( $new_data['nilai'] == "") {
                    echo '<div class="alert alert-danger">nilai belum diisi!</div>';
                } else {
                    $data = select_nilai($nim);
                    if (sizeof($data) > 0) {
                        if (update_data($nim,$new_data)) echo '<div class="alert alert-success">sukses masukan nilai ('.$nim.')!</div>';
                        else echo '<div class="alert alert-danger">Gagal memasukan nilai dengan NIM ('.$hapus.')!</div>';
                    } else {
                        echo '<div class="alert alert-danger">NIM ('.$hapus.') tidak ditemukan!</div>';
                    }
                }
            }
        }

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
                            <td class= 'text-center'>Nilai</td>
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