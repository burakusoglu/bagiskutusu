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
</head>

<body>
    <!-- HeaderTop-Start  -->
    <div class="container-fluid top-menu fixed-top-menu">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 d-flex align-items-center h39 text-bagis">
                    <a href="#">
                        <h6>Bağış kutusu web sitesine hoş geldiniz . Mail adresimiz: </h6> <span>iletisim@bagiskutusu.org</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- HeaderTop-End  -->

    <!-- Header-Start -->
    <!-- menu -->
    <div class="container-fluid  menu fixed-top lists-top">
        <div class="container ">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8 col-8 h80 d-flex align-items-center logo">
                    <h1><a href="#"><img src="assets/img/logo.png" alt="" srcset=""></a></h1>
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
    <!-- Header-End -->

    <div class="container" style="margin-top: 150px!important; margin-bottom: 150px!important; ">
    <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
        <div class="ortala">

        <h3 class="odemeDetay">Bağış Detayı</h3>
        <div class="Effect-div">
        <hr class="Effect">
        </div>

    <div class="input-group mb-6" style=" margin-bottom:40px;">
                    <input type="text" id="k_mail"  class="form-control "  value="<?php echo $_COOKIE['formName'] ?>"  disabled>
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" style="border-color:#ced4da;" type="button" id="button-addon2" ><i class="fas fa-user"></i></button>
                    </div>
          </div>
          <div class="input-group mb-6" style="margin-bottom:40px;">
                    <input type="text" id="k_mail"  class="form-control" value="<?php echo $_COOKIE['formDSName'] ?>"  disabled>
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" style="border-color:#ced4da;" type="button" id="button-addon2" ><i class="fas fa-user"></i></button>
                    </div>
          </div>
          <div class="input-group mb-6" style="  margin-bottom:40px;">
                    <input type="email" id="k_mail"  class="form-control " value="<?php echo $_COOKIE['formMail'] ?>"  disabled>
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" style="border-color:#ced4da;" type="button" id="button-addon2" ><i class="fas fa-envelope"></i></button>
                    </div>
          </div>
          <div class="input-group mb-6" style=" margin-bottom:40px;">
                    <input type="integer" id="k_mail"  class="form-control "  value="<?php echo $_COOKIE['formEsyaC'] ?>" disabled>
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" style="border-color:#ced4da;" type="button" id="button-addon2" ><i class="fas fa-sort-amount-up-alt"></i></button>
                    </div>
          </div>

          <div class="input-group mb-6" style=" margin-bottom:40px;">
                    <input type="integer" id="k_mail"  class="form-control "  value="<?php echo $_COOKIE['formEsya'] ?>" disabled>
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" style="border-color:#ced4da;" type="button" id="button-addon2" ><i class="fas fa-file-signature"></i></button>
                    </div>
          </div>
</div>
</div>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
    
    <div class="demo-container">

<div class="form-container cardInput active">
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Adres</label>
            <textarea class="form-control" placeholder="Eşyayı Göndereceğiniz Adresi Giriniz" type="text" name="esyaAdres" required></textarea>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-success btn-block payment-btn" value="1" name="esyaOnay">Gönder</button>

        </div>
        <div class="form-group">
            <?php
            if (isset($cardError)) {
                echo danger($cardError);
            }
            if (isset($cardSuccess)) {
                echo success($cardSuccess);
            }
            ?>
        </div>
    </form>
</div>

</div>
    </div>
        </div>
    </div>
   
    <?php require view('static/footer'); ?>

    <!-- Footer-End -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/fontawesome.min.js"></script>
    <script src="assets/js/card.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        new Card({
            form: document.querySelector('form'),
            container: '.card-wrapper',
            placeholders: {
                number: '•••• •••• •••• ••••',
                name: 'İsim Soyisim',
                expiry: '••/••',
                cvc: '•••',
                width: 200, // optional — default 350px

            },
        });
    </script>
</body>

</html>