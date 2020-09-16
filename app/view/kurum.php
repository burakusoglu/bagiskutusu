<?php require view('static/sliderHeader'); ?>
  
       <!-- mobil menu-End -->
       <div class="society-back"> 
       <div class=" society-text ">   
            <div class="container">
                <h2 class="society-txt"><?php echo $societyInfo['societyName']; ?></h2>
            </div>   
            <div class="society-img">
              <i class="fas fa-tint"></i>
            </div>      
       </div>   
    </div>
<!-- Header-End -->

<!-- Society First-End-Start -->
<div class="container" style="margin-top: 150px!important; margin-bottom: 150px!important;">
    <div class="row">

    <div class="col-xl-5 col-lg-5 col-md-5  left-society">
        <div class="l-society">     
          <a href=""> <img class=""  style="width:100%;"src="<?= asset_url('img/society/').$societyInfo['societyImage']; ?>"> </a>  
      </div>
  </div>  
        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 right-society">
          <div class="r-society">
            <h3><?php echo $societyInfo['societyName']; ?></h3>
            <p><?php echo $societyInfo['societyText']; ?></p>
        </div>
        </div>
  </div>
</div>
<!-- Society First-End -->

<!-- Society Statistic-Start -->
<div class="container-fluid statistic">
      <h2 class="statistic-title">BAĞIŞLAR HAKKINDA</h2>
      <h4 class="statistic-subtitle">Bilgiler</h4>
      <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 statistic-card">
            <div class="card" style="width: 18rem; margin-bottom: 12px;">
              <div class="card-body">
                <span class="statistic-like">
                        <i class="fas fa-heart"></i>
                </span>
                <h5 class="card-text-statistic">TOPLAM AÇILAN <br>BAĞIŞ</h5>
                <h2><?php  echo count($donateInfo); ?></h2>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 statistic-card">
            <div class="card" style="width: 18rem; margin-bottom: 12px;">
              <div class="card-body">
                <span class="statistic-like">
                        <i class="fas fa-comments"></i>
                </span>
                <h5 class="card-text-statistic">TOPLAM<br>BLOG SAYISI</h5>
                <h2><td><?php  echo count($blogInfo); ?></td></h2>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 statistic-card">
            <div class="card" style="width: 18rem; margin-bottom: 12px;">
              <div class="card-body">
                <span class="statistic-like">
                        <i class="fas fa-bell"></i>
                </span>
                <h5 class="card-text-statistic">TOPLAM<br>DÜZENLENEN ETKİNLİK</h5>
                <h2><?php  echo count($activityInfo); ?></h2>
              </div>
            </div>
          </div>
      </div>
      
</div>
</div>
<!-- Society Statistic-End -->


<!-- Society Contact- Start -->
<div class="container-fluid contact">
    <h2 class="contact-title">İLETİŞİM</h2>
    <h4 class="contact-subtitle">Adres, Telefon, Website</h4>
    <div class="contact-map"><iframe src="<?php echo $societyInfo['societyAddress']; ?>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
     
    </div>
    <div class="row">    
        <div class=" col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 contact-cart">
        <div class="card-ctact">
            <a href="tel:<?php echo $societyInfo['societyPhone']; ?>"><i class="fas fa-phone"></i><br><span><?php echo $societyInfo['societyPhone']; ?></span></a>
        </div>
    </div>
    <div class=" col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 contact-cart">
        <div class="card-ctact">
            <a target="_blank" rel="nofollow" href="<?php echo $societyInfo['societyWeb']; ?>"><i class="fas fa-globe"></i><br><span>gücsüzleryurdu.com</span></a>
        </div>
    </div>
    </div>

</div>
<!-- Society Contact-End -->

<?php require view('static/footer'); ?>
