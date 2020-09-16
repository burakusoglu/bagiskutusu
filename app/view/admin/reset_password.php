<?php require view('admin/static/header') ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<body class="bg-dark">

  <div class="container">
    
    <div class="card card-login mx-auto mt-5">
    <div class="container society-admin">
                      <a href="#"><img  src="<?=admin_asset_url('img/s-admin.png'); ?>" alt="" srcset=""></a>
                   </div>
      <div class="card-body">
        <form action=""  method="post" class="form-post">
          <div class="form-group">
            <label for="exampleInputEmail1">E-Posta:</label>
            <input class="form-control" name="username" id="exampleInputEmail1" type="text"  placeholder="Mail Adresinizi Giriniz.">
          </div>
          <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6LfDsegUAAAAADVzSSl7h1mzLvUAmiLxxqGibOhs"></div>
          </div>
          <div class="form-group">
            <?php
            if (isset($error)) {
              echo danger($error);
            }
            if (isset($success)) {
              echo success($success);
            }
            ?>
          </div>
          <button class="btn btn-primary btn-block" type="submit" name="resetPassword" value="1">Gönder</button>
        </form>

           
      </div>
    </div>
  </div>
<?php require view('admin/static/footer'); ?>
