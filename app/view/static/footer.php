<!-- Footer-Start -->
<footer>
    <div class="footer-top" id="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
                    <h3>HAKKIMIZDA</h3>
                    <p>BagisKutusu.org gönüllü öğrenci arkadaşlardan oluşan ve kar amacı gütmeden oluşturulmuş bir Atılım Üniversitesi bitirme projedir.</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 segment-two">
                    <h3>SİTE HARİTASI</h3>
                    <ul>
                        <li><a href="<?php echo site_url('index'); ?>"> Anasayfa</a></li>
                        <li><a href="<?php echo site_url('hakkimizda'); ?>"> Hakkımızda </a></li>
                        <li><a href="<?php echo site_url('bagislisteleri'); ?>"> Listeler</a></li>
                        <li><a href="<?php echo site_url('index#blog'); ?>"> Blog</a></li>
                        <li><a href="<?php echo site_url('index#contact'); ?>"> İletişim</a></li>
                    </ul>
                </div>
                
                <div class="col-md-3 col-sm-6 col-xs-12 segment-four md-mb-30 sm-mb-30">
                    <h2>ETİKETLER</h2>
                    <div class="tags">
                    <?php 
                     ?>
                        <ul class="clearfix">
                            <li><a> Yardimlasma</a></li>
                            <li><a> Destek</a></li>
                            <li><a> Kardeslik</a></li>
                            <li><a> AtilimUniversity </a></li>
                            <li><a> BagisKutusu </a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 segment-three md-mb-30 sm-mb-30">
                <h2>BİZİ TAKİP ET</h2>
                <p>Bizi sosyal medya hesaplarımızdan takip ederek destek olabilirsiniz!</p>
                <a target="_blank" rel="nofollow" href="http://facebook.com"><i class="fab fa-facebook"></i></a>
                <a target="_blank" rel="nofollow" href="http://instagram.com/bagiskutusuorg"><i class="fab fa-instagram"></i></a>
                <a target="_blank" rel="nofollow" href="http://twitter.com"><i class="fab fa-twitter"></i></a>
            </div> 
       
            </div>
        </div>
    </div>
        <p class="footer-bottom-text">© 2020 Atılım Üniversitesi Bitirme Projesi</p>
</footer>
<!-- Footer-End -->

<!-- Ajax Url Başlatma -->

<script>
    var ajax_url = "<?php echo site_url("ajax"); ?>";
</script>
<!-- Ajax Url Başlatma - Bitiş -->

   <script src="<?php echo asset_url('/js/bootstrap.bundle.min.js'); ?>"></script>
   <script src="<?php echo asset_url('/js/fontawesome.min.js'); ?>"></script>
   <script src="<?php echo asset_url('/js/owl.carousel.min.js'); ?>"></script>
   <script src="<?php echo asset_url('/js/main.js'); ?>"></script>
   <script src="<?php echo asset_url('/js/isotope.min.js'); ?>"></script>
<!-- Jquery ile flw_btn tıklandığı zaman act-id yi idsi actID olanın içine atıyoruz -->
    <script>
    $(".flw_btn").click(function(){
        var id = $(this).attr('act-id');
        $("#actID").val(id);
    });
    </script>

<!-- Jquery ile btnDonate tıklandığı zaman donate-id yi idsi donateList olanın içine atıyoruz -->
    <script>
    $(".btnDonate").click(function(){
        var id = $(this).attr('donate-id');
        $("#donateList").val(id);
    });
    </script>

<!-- Hazır anasayfadaki partnerler kısmı -->
   <script>
         $('.owl-partner').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    autoplay:true,
    autoplayTimeout:3000,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});

//Hazır eventler kısmı anasayfadaki
$('.owlEvent').owlCarousel({
  loop:true,
  margin:10,
  autoplay:false,
  responsiveClass:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      }
  }
});

//Hazır anasayfadaki bloglar kısmı
$('.owlBlog').owlCarousel({
  loop:true,
  margin:10,
  dots:false,
  autoplay:false,
  responsiveClass:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
});
//Etkinlik Takip Et kısmındaki modal kısmı
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
   </script>

   
</body>
</html>