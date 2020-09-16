<?php require view('static/sliderHeader'); ?>

       <!-- mobil menu-End -->
       <div class="about-back"> 
       <div class=" about-text ">   
            <div class="container">
                <h2 class="about-txt">HAKKIMIZDA</h2>
            </div>   
            <div class="about-img">
              <i class="fas fa-info-circle"></i>
            </div>      
       </div>   
    </div>
    
<!-- Header-End -->

<!--About First-End-Start -->
<div class="container" style="margin-top: 150px!important; margin-bottom: 150px!important;">
    <div class="row">

    <div class="col-xl-5 col-lg-5 col-md-5  left-about">
        <div class="l-about">     
          <a href=""> <img class="" src="assets/img/aboutlogo.png"> </a>  
      </div>
  </div>  
        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 right-about">
          <div class="r-about">
            <h3>Bağış Kutusu</h3>
            <p>BagisKutusu.org gönüllü öğrenci arkadaşlardan oluşan ve kar amacı gütmeden oluşturulmuş bir Atılım Üniversitesi bitirme projedir.</p>
        </div>
        </div>
  </div>
</div>
<!-- About First-End -->
<!-- About Statistic-Start -->
<div class="container-fluid statistic">
      <h2 class="statistic-title">NELER YAPIYORUZ?</h2>
      <h4 class="statistic-subtitle">Hizmetlerimiz</h4>
      <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 statistic-card">
            <div class="card" style="width: 18rem; margin-bottom: 12px;">
              <div class="card-body">
                <span class="statistic-donate">
                        <img src="assets/img/donate.png">
                </span>
                <h5 class="card-text-statistic">BAĞIŞ</h5>
                <p>Listeler kısmından seçmiş olduğunuz kuruma veya kişiye bağış yapabilirsiniz.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 statistic-card">
            <div class="card" style="width: 18rem; margin-bottom: 12px;">
              <div class="card-body">
                <span class="statistic-donate">
                    <img src="assets/img/service.png">
                </span>
                <h5 class="card-text-statistic">GÖNÜLLÜLÜK</h5>
                <p>Kurumların düzenleyeceği etkinliklerde gönüllü olarak görev alabilirsiniz.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 statistic-card">
            <div class="card" style="width: 18rem; margin-bottom: 12px;">
              <div class="card-body">
                <span class="statistic-donate">
                    <img src="assets/img/candidate.png">
                </span>
                <h5 class="card-text-statistic">İŞ BİRLİKLERİ</h5>
                <p>Anlaşmalı olduğumuz kurumları inceleyebilir, açmış oldukları bağışlara destek olabilirsiniz.</p>
              </div>
            </div>
          </div>
      </div>    
</div>
</div>
<!-- About Statistic-End -->

<!-- Voluenteer-Start -->
<div class="container-fluid">
    <h2 class="statistic-title">GÖNÜLLÜLERİMİZ</h2>
    <h4 class="statistic-subtitle">Takım</h4>
    <button type="button" class="btn btn-outline-contact" ><a href="<?php echo site_url('index#contact'); ?>"><i class="fas fa-heart"></i> Şimdi Katıl</a></button>
    <div class="row">
        <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 voluenteer-cart">
            <div class="card" style="width: 18rem; margin-top: 50px; margin-bottom: 50px;">
                <img src="<?php echo asset_url("img/atakan.jpg"); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="float: left;">Geliştirici</p>
                  <h6 class="card-team-name">Atakan DÖNMEZ</h6>
                </div>
              </div>
        </div>

        <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 voluenteer-cart">
            <div class="card" style="width: 18rem; margin-top: 50px; margin-bottom: 50px; ">
                <img src="<?php echo asset_url("img/baris2.jpg"); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="float: left;">Geliştirici</p>
                  <h6 class="card-team-name">Barış GÜRŞÜN</h6>
                </div>
              </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 voluenteer-cart">
            <div class="card" style="width: 18rem; margin-top: 50px; margin-bottom: 50px;">
                <img src="<?php echo asset_url("img/burak.png"); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="float: left;">Geliştirici</p>
                  <h6 class="card-team-name">Burak KUŞOĞLU</h6>
                </div>
              </div>
        </div>
        <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 voluenteer-cart">
            <div class="card" style="width: 18rem; margin-top: 50px; margin-bottom: 50px;">
                <img src="<?php echo asset_url("img/deniz.jpeg"); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="float: left;">Geliştirici</p>
                  <h6 class="card-team-name">Deniz KAYA</h6>
                </div>
              </div>
        </div>

    </div>
    </div>
<!-- Voluenteer-End -->

<?php require view('static/footer'); ?>