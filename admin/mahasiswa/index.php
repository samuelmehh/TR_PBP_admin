<?php 
error_reporting(0);

require_once "components/header.php"; 
require_once "functions.php"; 
?>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Home Page</h1>
  <p class="lead">Selamat datang <?= $_SESSION['data']['nama'] ?>, ini adalah halaman home untuk melihat data diri anda.</p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">NIM</h4>
      </div>
      <div class="card-body">
        <h3 class="card-title pricing-card-title"><?= $_SESSION['user'] ?></h3>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">IPK</h4>
      </div>
      <div class="card-body">
        <h3 class="card-title pricing-card-title"><?= $_SESSION['data']['ipk'] ?></h3>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Asal</h4>
      </div>
      <div class="card-body">
        <h3 class="card-title pricing-card-title"><?= $_SESSION['data']['asal'] ?></h3>
      </div>
    </div>
  </div>
</div>

<?php require_once "components/footer.php"; ?>