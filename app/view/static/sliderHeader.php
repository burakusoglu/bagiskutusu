<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="eeysaehyOPW5__8PpbGAnGQILaxLs-ehm_YpuRa31R8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168053672-1"></script>
    <link rel="stylesheet" href="<?= asset_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= asset_url('css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= asset_url('css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= asset_url('css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?= asset_url('css/style.css'); ?>">
<title>Bağış Kutusu | Güvenli Bağışın Adresi!</title>
<script src="<?php echo asset_url('/js/jquery-3.4.1.min.js'); ?>"></script>


</head>

<body>

<!-- HeaderTop-Start  -->
<div class="container-fluid top-menu fixed-top-menu">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-4 col-sm-4 col-4 d-flex align-items-center h39 text-bagis">
                  <a href="mailto:iletisim@bagiskutusu.org"><h6>Bağış kutusu web sitesine hoş geldiniz . Mail adresimiz: </h6> <span>iletisim@bagiskutusu.org</span></a>
            </div>    
            <div class="col-xl-4 col-lg-4 col-md-8 col-sm-8 col-8  d-flex  align-items-center h39 header-login">
                <ul>
                    <?php if(session("user_name")){
                      echo session("user_name");
                      ?>
                      <li> <a href="<?php echo site_url('kullanicisayfasi'); ?>"><i class="fas fa-heart"  style="cursor:pointer;"></i> | </a></li>
                       <li  class="loginBtn"><a  class=" user" href="<?php echo site_url("kullanicisayfasi"); ?>"><i class="fas fa-user"></i></a></li>
                      <?php
                    }else{
                      ?>
              <li> <a onclick="return confirm('Bağış Takip Etmek İçin Giriş Yapmalısınız')"><i class="fas fa-heart" style="cursor:pointer;"></i> | </a></li>
               <li  data-toggle="modal" data-target="#exampleModalCenter"  class="loginBtn"> <a data-toggle="modal" data-target="#exampleModalCenter"  class=" user" href="#"><i class="fas fa-user"></i></a></li>
                  <?php  } ?>
                   
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
   <div class="modal-content">
    <div class="modal-header">
  <div class="login-signup">
    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i></button>
   </div>
    </div>
<!-- Giriş - Başlama -->
   <div class="modal-body">
<div class="bd-example">
    <div class="login-box"  style="cursor:pointer!important;">
        <div class="lb-header"  style="cursor:pointer!important;">
          <a  class="active" id="login-box-link">Giriş </a>
          <a id="signup-box-link">Kayıt </a>
            <a  class="forgot-password">Şifreni Sıfırla</a>
        </div>
        <form class="email-login" method="post">
          <div class="ortalamaSifre" style="display:flex; justify-content:center;">
          <div class="input-group mb-3" style="width: calc(50% - 22px);">
                    <input type="email" id="k_mail"  class="form-control " placeholder="Mail Adresi">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" style="border-color:#ced4da;" type="button" id="button-addon2" ><i class="fas fa-envelope"></i></button>
                    </div>
          </div>
          </div>

          <div class="ortalamaSifre" style="display:flex; justify-content:center;">
          <div class="input-group mb-3" style="width: calc(50% - 22px);">
                    <input type="password" id="k_pass"  class="form-control password" placeholder="Şifre" aria-label="Şifre" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" style="border-color:#ced4da;" type="button" id="button-addon2" onclick="myFunction2()"><i class="fas fa-eye"></i></button>
          </div>
          </div>
          </div>

          <div class="u-form-group">
            <button name="giris" type="submit" id="giris" value="1">Giriş Yap</button>
          </div>
      <!-- Ajax Giriş - Bitiş -->
                <script>
                  $('#giris').on('click',function(e){
                  
              var mail = $("#k_mail").val();
              var pass = $("#k_pass").val();
                  $.post(ajax_url,{'type':'login','k_mail':mail,'k_pass':pass},function(sonuc){
                    
                      if(sonuc == "ok"){
                          location.reload();
                          $('.dogru').text("Giriş Yapılıyor");
                          $('.dogru').show();
                          $('.uyari').hide();
                        }else{
                          $('.uyari').text(sonuc);
                          $('.uyari').show();
                        }
                  }, 'json');
              e.preventDefault();
          });
                </script>
          <!-- Ajax Giriş - Bitiş -->      
          <div class="u-form-group text-center ">
          <span style="display:none;" class="alert alert-success btn-block dogru"></span>
          <span style="display:none;" class="alert alert-danger btn-block uyari"></span>
          </div> 
      </div>
        </form>
<!-- Giriş - Bitiş -->

 <!-- Şifre Reset -->
 <form class="email-reset" method="post">
          <div class="ortalamaSifre" style="display:flex; justify-content:center;">
          <div class="input-group mb-3" style="width: calc(50% - 22px);">
                    <input type="email" id="r_mail"  class="form-control " placeholder="Mail Adresi">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" style="border-color:#ced4da;" type="button" id="button-addon2" ><i class="fas fa-envelope"></i></button>
                    </div>
          </div>
          </div>

          <div class="u-form-group" style="display: flex;justify-content: center;">
            <button type="submit" id="resetp" value="1">GÖNDER</button>
          </div>
      <!-- Ajax Giriş - Başlama -->
                <script>
                  $('#resetp').on('click',function(e){              
              var mail = $("#r_mail").val();
                  $.post(ajax_url,{'type':'resetPassword','r_mail':mail},function(sonuc){
                      // console.log(rmail);
                      // console.log(sonuc);
                      if(sonuc == "ok"){
                          location.reload();
                          $('.dogruR').text("Doğrulama Linki Gönderilmiştir");
                          $('.dogruR').show();
                          $('.uyariR').hide();
                        }else{
                          $('.uyariR').text(sonuc);
                          $('.uyariR').show();
                        }
                  }, 'json');
              e.preventDefault();
          });
                </script>
          <!-- Ajax Giriş - Bitiş -->      
          <div class="u-form-group text-center ">
          <span style="display:none;" class="alert alert-success btn-block dogruR"></span>
          <span style="display:none;" class="alert alert-danger btn-block uyariR"></span>
          </div> 
      </div>
        </form>
<!-- Şifre Reset -->



<!-- Kayıt -Başlama -->

        <form class="email-signup" method="post">
          <div class="ortalamaSifre" style="display:flex; justify-content:center;">
          <div class="input-group mb-3" style="width: calc(50% - 22px);">
                    <input type="name" id="c_name"  class="form-control" placeholder="İsim" >
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" style="border-color:#ced4da;" type="button" id="button-addon2" ><i class="fas fa-user"></i></button>
                    </div>
                  </div>
          </div>

          <div class="ortalamaSifre" style="display:flex; justify-content:center;">
          <div class="input-group mb-3" style="width: calc(50% - 22px);">
                    <input type="email" id="c_mail"  class="form-control" placeholder="Mail Adresi">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" style="border-color:#ced4da;" type="button" id="button-addon2" ><i class="fas fa-envelope"></i></button>
                    </div>
          </div>
          </div>

          <div class="ortalamaSifre" style="display:flex; justify-content:center;">
          <div class="input-group mb-3" style="width: calc(50% - 22px);">
                    <input type="password" id="c_pass"  class="form-control newPassword" placeholder="Şifre" aria-label="Yeni Şifre" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" style="border-color:#ced4da;" type="button" id="button-addon2" onclick="myNewFunction2()"><i class="fas fa-eye"></i></button>
          </div>
          </div>
          </div>

          <div class="ortalamaSifre" style="display:flex; justify-content:center;">
          <div class="input-group mb-3" style="width: calc(50% - 22px);">
                    <input type="password" id="c_pass2"  class="form-control newPasswordAgain" placeholder="Şifre Tekrarı" aria-label="Yeni Şifre" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" style="border-color:#ced4da;" type="button" id="button-addon2" onclick="myNew2Function2()"><i class="fas fa-eye"></i></button>
                    </div>
          </div>
          </div>

          <div class="u-form-group">
            <button id="kayit" type="submit" value="1">Kayıt Ol</button>
          </div>
      
          <div class="u-form-group">
          <div class="uyariOrtala" style="display:block; justify-content:center;">
                      <div class="col-md-12" style="font-size:11px;">
                      <?php                     
                        echo info("Şifre Kuralı: Şifreniz en az 8 karakter olmalıdır (Büyük Harf, Küçük Harf ve Sayı içermelidir).");
                      ?>
                      </div>
        </div></div>
                <!-- Ajax Giriş - Bitiş -->
                <script>
                
                  $('#kayit').on('click',function(e){
              var name = $("#c_name").val();  
              var mail = $("#c_mail").val();
              var pass = $("#c_pass").val();
              var pass2 = $("#c_pass2").val();
                  $.post(ajax_url,{'type':'register','c_name':name,'c_mail':mail,'c_pass':pass,'c_pass2':pass2},function(sonuc){
                    
                      if(sonuc == "ok"){
                          location.reload();
                          $('.dogruKayit').text("Kayıt İşlemi Başarılı");
                          $('.dogruKayit').show();
                          $('.uyariKayit').hide();
                        }else{
                          $('.uyariKayit').text(sonuc);
                          $('.uyariKayit').show();
                        }
                  }, 'json');
              e.preventDefault();
          });
                </script>
          <!-- Ajax Giriş - Bitiş -->  
          <div class="u-form-group text-center">
          <span style="display:none;" class="alert alert-success btn-block dogruKayit"></span>
          <span style="display:none;" class="alert alert-danger btn-block uyariKayit"></span>
          </div> 
        </form>
      </div>
      <div class="modal-footer">
      </div>
</div>
</div>
</div>
</div>
</div>
<!-- Modal-End -->

<!-- HeaderTop-End  -->

<!-- Header-Start -->
<header>
    <!-- menu -->
       <div class="container-fluid  menu fixed-top">
           <div class="container ">
               <div class="row">
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8 col-8 h80 d-flex align-items-center logo">
                       <h1><a href="<?php echo site_url('index'); ?>"><img  src="<?php echo asset_url("/img/logo.png"); ?>" alt="" srcset=""></a></h1>
                   </div>
                   <div class="col-xl-8 col-lg-8 col-md-8 h80 col-sm-4 col-4 d-flex align-items-center menu-bar">
                       <ul>
                           <li><a href="<?php echo site_url('index'); ?>">Ana Sayfa</a></li>
                           <li><a href="<?php echo site_url('hakkimizda'); ?>">Hakkımızda</a></li>
                           <li><a href="<?php echo site_url('bagislisteleri'); ?>">Bağış Listeleri</a></li>
                           <li><a href="<?php echo site_url('index#blog'); ?>">Blog</a></li>
                           <li><a href="<?php echo site_url('index#contact'); ?>">İletişim</a></li>        
                           <li class="talepUst"><a href="<?php echo site_url('talep'); ?>"><button type="button" class="btn btn-outline-light talep"> <i class="fas fa-bullhorn"></i> İhtiyaç Sahibiyim</button></a></li>        
                       </ul>
                       <span class="open-menu" style="font-size:30px;cursor:pointer; " onClick="openNav()"><i class="fas fa-bars"></i></span>
                   </div>
               </div>
           </div>
       </div>
       <!-- mobil menu -->
       <div id="mobil-menu" class="m-menu">
           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
               <i class="fas fa-times"></i></a>
           <ul>
               <li><a href="<?php echo site_url('index'); ?>">Ana Sayfa</a></li>
               <li><a href="<?php echo site_url('hakkimizda'); ?>">Hakkımızda</a></li>
               <li><a href="<?php echo site_url('bagislisteleri'); ?>">Bağış Listeleri</a></li>
               <li><a href="<?php echo site_url('index#blog'); ?>">Blog</a></li>
               <li><a href="<?php echo site_url('index#contact'); ?>">İletişim</a></li>
               <li><a href="<?php echo site_url('talep'); ?>"><button type="button" class="btn btn-outline-light talep"> <i class="fas fa-bullhorn"></i> İhtiyaç Sahibiyim</button></a></li>        

           </ul>
       </div>
       <!-- mobil menu-End -->
       <?php
if(url(0)=="index"){
  ?>
  <div class="container-fluid headerImage">
       <div class="container d-flex align-items-center header-text ">
           <div class="small-images">
              <div class="elemantor-widget-wrap">
                <div class="elemontor-widget-container">
                   <div class="header-image">
                        <img width="73" height="72" src=" <?php echo asset_url("/webfonts/heart-1.svg"); ?>" alt="" srcset="">
                   </div>
                 </div>    
              </div>

              <div class="elemantor-widget-wrap2">
                <div class="elemontor-widget-container2">
                   <div class="header-image">
                        <img width="73" height="72" src=" <?php echo asset_url("/webfonts/heart.svg"); ?>" alt="" srcset="">
                   </div>
                 </div>    
              </div>

              <div class="elemantor-widget-wrap3">
                <div class="elemontor-widget-container3">
                   <div class="header-image">
                        <img width="73" height="72" src="<?php echo asset_url("/webfonts/heart-hand.svg"); ?>" alt="" srcset="">
                   </div>
                 </div>    
              </div>

              <div class="elemantor-widget-wrap4">
                <div class="elemontor-widget-container4">
                   <div class="header-image">
                        <img width="73" height="72" src="<?php echo asset_url("/webfonts/respect.svg"); ?>" alt="" srcset="">
                   </div>
                 </div>    
              </div>
              
           </div>
           <div style="display: block; text-align: center;" class="elemantor-heart">
                 <div class="heart-img"><i class="far fa-heart" ></i></div>
                 <div class="heart-text">
                    <h5 class="top-text" >Sen de</h5>
                    <h2 class="bottom-text"><span>Umut Ol!</span></h2>
               </div> 
           </div>
       </div> 
       </div>
  <?php
}
?>
  
</header>