<?php require view('admin/static/header'); ?>

<div class="content-wrapper">
   <div class="container-fluid">
     <ol class="breadcrumb">
       <li class="breadcrumb-item">
         <a href="#">Profil</a>
       </li>
     </ol>
     <div class="row text-center">
       <div class="col-md-12">
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
     <div class="row">
       <div class="col-md-6">
         <div class="card mb-3">
                <div class="card-header">
                  <i class="fa fa-table"></i> Profil Bilgileri</div>
                <div class="card-body">
                  <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                      <div class="col-md-12" style="display:flex; justify-content:center; justify-items:center; " >
                      <img style="height:100%; width:20%" src="<?=asset_url('img/society/').$membership_info['societyImage']; ?>">

                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                            <label for="exampleInputName">Kurum Adı:</label>
                            <input class="form-control" name="sName1" type="text" aria-describedby="nameHelp" value="<?php echo $membership_info['societyName'] ?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                            <label for="exampleInputName">Yayıncı Adı:</label>
                            <input class="form-control" name="sName"  type="text" aria-describedby="nameHelp" value="<?php echo $membership_info['societyName'] ?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                            <label for="exampleInputName">Mail Adresi:</label>
                            <input class="form-control" name="sMail"  type="text" aria-describedby="nameHelp" value="<?php echo $membership_info['societyMail'] ?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                            <label for="exampleInputName">Kurum Bilgi Yazısı:</label>
                            <input class="form-control" name="sText"  type="text" aria-describedby="nameHelp" value="<?php echo $membership_info['societyText'] ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                            <label for="exampleInputName">Kurum Google Konum Linki:</label>
                            <input class="form-control" name="sAddress"  type="text" aria-describedby="nameHelp" value="<?php echo $membership_info['societyAddress'] ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                            <label for="exampleInputName">Kurum Telefon Numarası:</label>
                            <input class="form-control" name="sPhone" type="text" aria-describedby="nameHelp" value="<?php echo $membership_info['societyPhone'] ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                            <label for="exampleInputName">Kurum Web Sitesi:</label>
                            <input class="form-control" name="sWeb" type="text" aria-describedby="nameHelp" value="<?php echo $membership_info['societyWeb'] ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                            <label for="exampleInputName">Kurum Logosu:</label>
                              <input type="file" name="sLogo" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                            <label for="">Üyelik Tarihi: <?php echo $membership_info['societyDate'] ?></label>
                      </div>
                    </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <button class="btn btn-primary btn-block" type="submit" name="profile_update" value="1">Güncelle</button>
                    </div>
                  </div>
                  </form>
                </div>
          </div>
       </div>
         
       <div class="col-md-6">
         <div class="card mb-3">
                <div class="card-header">
                  <i class="fa fa-lock"></i> Şifre Değiştir</div>
                <div class="card-body">
                  <form action="" method="post">
                    <div class="form-group">
                      <div class="col-md-12">
                            <label for="exampleInputName">Şifre:</label>
                            <input class="form-control" name="password" id="" type="password" aria-describedby="nameHelp" placeholder="Şifrenizi Giriniz">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                            <label for="exampleInputName">Yeni Şifre:</label>
                            <input class="form-control" name="newPassword" id="" type="password" aria-describedby="nameHelp" placeholder="Yeni Şifrenizi Giriniz">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                            <label for="exampleInputName">Yeni Şifre Tekrar:</label>
                            <input class="form-control" name="newPasswordAgain" id="" type="password" aria-describedby="nameHelp" placeholder="Yeni Şifrenizi Tekrar Giriniz">
                      </div>
                    </div>

                  <div class="form-group">
                    <div class="col-md-12">
                      <button class="btn btn-primary btn-block" type="submit" name="new_password" value="1">Şifre Değiştir</button>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                    <?php 
                    if($membership_info['passControl'] == 0){
                      echo info("Lütfen şifrenizi değiştiriniz.");
                    }
                    ?>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-12">
                    <?php 
                   
                      echo info("Şifre Kuralı: Şifreniz en az 8 karakter, büyük harf, küçük harf ve sayı içermelidir.");
                
                    ?>
                    </div>
                    </div>
                  </form>
                </div>
          </div>
       </div>


     </div>
   
   </div>




<?php require view('admin/static/footer'); ?>
