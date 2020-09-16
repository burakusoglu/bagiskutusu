<?php require view('admin/static/header'); ?>



<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo admin_url('users'); ?>">Kurumlar</a>
        </li>
        <li class="breadcrumb-item active">Kurum Ekle</li>
      </ol>
      <div class="row">
        <div class="col-12 text-align">

          <form action="" method="post">
            <div class="form-group">
              <div class="col-md-6">
                    <label for="exampleInputName">Kurum Adı</label>
                    <input class="form-control" name="username" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Kurum Adını Giriniz">
              </div>
            </div>
          <div class="form-group">
            <div class="col-md-6">
                <label for="exampleInputEmail1">E-Posta Adresi</label>
                <input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="E-Posta Adresi Giriniz">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6">
              <button class="btn btn-primary btn-block" type="submit" name="admin_add" value="1">Ekle</button>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6">
          <?php
          if (isset($error)) {
            echo danger($error);
          }
          if (isset($success)) {
            echo success($success);
          }
          ?>
        </div>
      </div>
          </form>
        </div>
      </div>
    </div>


<?php require view('admin/static/footer'); ?>
