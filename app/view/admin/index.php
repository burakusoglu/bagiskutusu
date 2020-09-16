<?php require view('admin/static/header') ?>


<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Anasayfa</a>
      </li>
      <li class="breadcrumb-item active">Anasayfa</li>
    </ol>

    <div class="row">

    </div>

    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-area-chart"></i></div>
      <div class="card-body">
          <br>
          <b>Sistem Güncelleme Bilgisi</b>
          <br>
          <br>
           <?php echo htmlspecialchars_decode($settings['announcment']); ?> 
           <br>
           <br>
           <br>
           <b>Bağış Kutusu Test Ekibi </b>
           <br>
           <br>
           <img src="<?=admin_asset_url('img/so-admin.png'); ?>">
      </div>
    </div>
  </div>


  <?php require view('admin/static/footer'); ?>
