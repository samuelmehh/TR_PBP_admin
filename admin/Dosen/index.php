<?php 
  error_reporting(0);

  require_once "header.php"; 
  require_once "fungsi.php";
  $kode = $_SESSION['user'];
  $data = select_data($kode)[0];
  //var_dump($kode, $data); 
?>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <!-- <?php 
      echo "a";
    ?> -->
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Kode Dosen</h4>
      </div>     
      <div class="card-body">
        <h3 class="lead"><?= $data['kode'] ?></h3>
      </div>
    </div>

    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Nama</h4>
        </div>
        <div class="card-body">
        <h3 class="lead"><?= $data['nama'] ?></h3>
      </div>
    </div>

    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Prodi</h4>
      </div>
      <div class="card-body">
        <h3 class="lead"><?= $data['prodi'] ?></h3>
      </div>
    </div>

    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Fakultas</h4>
      </div>
      <div class="card-body">
        <h3 class="lead"><?=$data['fakultas'] ?></h3>
      </div>
    </div>
    
  </div>
</div>

<?php require_once "footer.php"; ?>