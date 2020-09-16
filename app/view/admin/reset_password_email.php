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
                            <label for="exampleInputName">Yeni Şifre:</label>
                            <input class="form-control" name="newPassword" id="" type="password" aria-describedby="nameHelp" placeholder="Yeni Şifrenizi Giriniz.">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputName">Yeni Şifre Tekrar:</label>
                            <input class="form-control" name="newPasswordAgain" id="" type="password" aria-describedby="nameHelp" placeholder="Yeni Şifrenizi Tekrar Giriniz.">
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
          
          <button class="btn btn-primary btn-block" type="submit" name="resetPassword" value="1">Güncelle</button>
          <div class="form-group mt-2">
                    <?php 
                   
                      echo info("Şifre Kuralı: Şifreniz en az 8 karakter, büyük harf, küçük harf ve sayı içermelidir.");
                
                    ?>
                    </div>
        </form>

           
      </div>
    </div>
  </div>
<?php require view('admin/static/footer'); ?>
