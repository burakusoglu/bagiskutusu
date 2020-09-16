<?php require view('static/sliderHeader'); ?>

<!-- Services-Start -->
<div class="container services">
    <div class="row " style="margin-top: 80px;">
        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
             <div class="card services-card" style="width: 100%;">
                <div class="services-img">
                    <a href="<?php echo site_url('bagislisteleri'); ?>"><img src="<?php echo asset_url("/img/donation.png"); ?>"  class="w-100" alt="" srcset=""></a>
                </div>
             </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
            <div class="card services-card" style="width: 100%;">
                <div class="services-img">
                    <a href="<?php echo site_url('index#contact'); ?>"><img src="<?php echo asset_url("/img/volunteer.png"); ?>"  class="w-100" alt=""></a>
                </div>
              </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
            <div class="card services-card" style="width: 100%;">
                <div class="services-img">
                    <a href="<?php echo site_url('talep'); ?>"><img src="<?php echo asset_url("/img/share.png"); ?>"   class="w-100" alt="" srcset=""></a>
                </div>
              </div>
        </div>
    </div>
</div>
<!-- Services-End -->

<!-- Notification-Start -->
<div class= " container-fluid notification" id="notification">
    <h2>ETKİNLİKLERİMİZE<span> GÖZ AT!</span></h2>
<div class="container ">
    <div class="row" style="margin-top: 50px;">
    <div class="owl-carousel owl-theme owlEvent">
    <?php if($activityList){
            foreach ($activityList as $value) { ?>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
            <div class="item first-event">
                <div class="events_item">
                <span class="events_item_date_box">
                    <span class="events_item_day">
                    <?= $value['day']; ?>
                    </span>
                    <span class="events_item_month">
                    <?= $value['mounth']; ?>
                    </span>
                </span>
                <span class="events_item_title_area">
                    <span class="events_item_title"> <?= $value['title']; ?> <span class="events_flw"><button type="button" class="flw_btn" data-toggle="modal" act-id="<?= $value['activityID']; ?>" data-target="#flwModal">Takip Et</button></span></span>
                </span>
                <span class="events_item_time_area">
                    <span class="events_item_time_day">
                    <?= $value['clock']; ?>
                    </span>
                </span>
                <span class="events_item_button_area">
                    <span class="events_item_button">
                    <?= $value['place']; ?>
                    </span>
                </span>            
            </div>
            </div>
            </div>
            <?php }} ?>
        </div>
        
    </div>
</div>
</div>
</div>
<!-- Modal -->

<div class="modal fade bs-example-modal-sm massageBox defaultInfo" id="flwModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document" style="width: 100%;">
      <div class="modal-content" style="border-radius: 5px;">
        <div class="modal-header">
            
          <div class="massageIcon"><i class="fas fa-bell" aria-hidden="true"></i></div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="position:absolute;"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal-body">
          <p class="text-center" style="font-weight: bold; color: #383838;">Etkinikten Bildirim Al!</p>
          <div class="form-container cardInput active">
            <form method="post">
                <div class="col">
                    <label for="Name" style="font-size: 16px;">İsim</label>
                    <input type="text" class="form-control" placeholder="İsminiz" id="eName" required></input>
                  </div>
                <div class="col" style="margin-top: 16px;">
                    <label for="Mail" style="font-size: 16px;">Mail</label>  
                    <input type="email" class="form-control" placeholder="Mail Adresinizi Giriniz" id="eMail" required></input>
                </div>
                <input type="hidden" name="actID" id="actID"></input>

          </div> 
        </div>
        <div class="modal-footer" style="display: flex; justify-content: center;">
          <button style="border-radius: 8px; padding:8px; width: 80%;"  type="submit" id="follow_add"  class="btn btn-success btn-lg btn-block" value="1">GÖNDER</button>
        </div>
                        <!-- Ajax Etkinlik Takip - Bitiş -->
                        <script>


                        //Hangi etkinliği takip ediyorsa etkinlik ıdyi çekiyoruz
                        $('.flw_btn').on('click',function(e){
                            $(this).addClass("flw_active");
                            e.preventDefault();

                        });
                        $('#follow_add').on('click',function(e){
                        var name = $("#eName").val();  
                        var mail = $("#eMail").val();
                        var act = $("#actID").val();
                        $.post(ajax_url,{'type':'eventFollow','eName':name,'eMail':mail,'actID':act},function(sonuc){
                            
                            if(sonuc == "ok"){
                                $('.dogruTakip').text("Etkinlik Takibi Oluşturuldu");
                                $('.dogruTakip').show();
                                $('.uyariTakip').hide();
                                $('.flw_active').text("Takip Ediliyor");
                                }else{
                                $('.uyariTakip').text(sonuc);
                                $('.uyariTakip').show().fadeOut(5000);
                                
                                }
                                }, 'json');
                            e.preventDefault();
                        });
                        </script>
                <!-- Ajax Etkinlik Takip - Bitiş -->  

        <div class="modal-footer"  style="display: flex; justify-content: center; margin-top:-30px;">
            <div class="col-md-8">
          <span style="display:none;" class="alert alert-success btn-block dogruTakip"></span>
          <span style="display:none;" class="alert alert-danger btn-block uyariTakip"></span>
        </div>
        </form>
      </div>
        <!-- /.modal-footer --> 
      </div>
      <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
  </div>
  <!-- /.modal -->
  </section>
<!-- Notification-End -->

<!-- Blag-Start -->
<div class="container blog"  id="blog">
    <h2>BLOGLARA <span>GÖZ AT</span> </h2>
    <div class="row " style="margin-top: 100px;">
    <div class="owl-carousel owl-theme owlBlog">
    <?php if($blogList){
            foreach ($blogList as $value) { ?>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 ">
            <div class="item blog_area">
                <div id="#" class="blog_item">
                   <div class="blog_item_image">
                      <img  src="<?php echo asset_url('img/blog/').$value['b_image']; ?>" width="370" height="230" class="" alt="" sizes="(max-width:370px) 100vw,370px"></a> 
                   </div>
                </div>
                <div class="blog_item_content">
                    <div class="blog_item_content_header">
                        <h5 class="blog_item_content_title"> <a href="<?php echo site_url('blog/').$value['blogLink']; ?>"><?= $value['title']; ?></a></h5>
                    </div>
                    <div class="blog_item_content_date_area">
                        <span class="blog_item_content_date"> <a href="<?php echo site_url('blog/').$value['blogLink']; ?>" style="text-decoration: none;"> <?= $value['date']; ?>  </a></span>
                    </div>    
                </div>  
            </div>
        </div>
        <?php }} ?>
    </div>
    </div>
    <button type="button" class="btn btn-blog-next btn-lg "> <a  href="<?php echo site_url('bloglar'); ?>"><i class="fas fa-chevron-right"></i> Devamı</a></button>

</div>
<!--Blog-End  -->

<!-- reference -->
<div class="container-fluid reference">
    <div class="container">
        <h2>Sponsorlarımız & PARTNERLERİMİZ</h2>
        <div class="owl-carousel owl-theme owl-partner">
        <?php if($sponsorList){
            foreach ($sponsorList as $value) { ?>
            <div class="item">
                <div class="partner-item">
                    <a target="_blank" rel="nofollow" href="<?= $value['sponsorLink']; ?>"><img src="<?php echo asset_url('img/sponsor/').$value['image']; ?>" alt="<?= $value['name']; ?>"></a>
                </div>
            </div>
            <?php }} ?>
        </div>    
    </div>
</div>
<!-- Mesaage-Start -->

<div class= " container-fluid message" id="contact">
    <h2>BİZİMLE<span> İLETİŞİME GEÇ!</span></h2>
    <p>Düzenleyeceğimiz etkinliklerde gönüllü olarak çalışmak istersen bize mesaj atabilirsin.</p>
<div class="container msg-area">
    <form  action="" method="post">
    <div class="row messagerow" style="margin-top: 50px;">
            <div class="msg-login">
                <input type="text" placeholder="İsim ve Soyisim" class="input" id="cName" required></input>
                <input type="text" placeholder="Mail Adresin" class="input" id="cMail" required></input>
            </div>       
            <div class="msg">
                <textarea class="area" style="height: 100px;"  placeholder="Eklemek istediğin mesaj yazın..." class="input" id="cText" required></textarea>
            </div> 
            <div class="submit">
                <button class="btn" type="submit" id="c_send" value="1">GÖNDER</button>
            </div>
       
        <!-- Ajax İletişim - Başlangıç -->
        <script>
                  $('#c_send').on('click',function(e){
                  
              var cName = $("#cName").val();
              var cMail = $("#cMail").val();
              var cText = $("#cText").val();
                  $.post(ajax_url,{'type':'contact','cName':cName,'cMail':cMail,'cText':cText},function(sonuc){
                    
                      if(sonuc == "okw"){
                          location.reload();
                          $('.dogruMesaj').text("Mesajınız Gönderildi");
                          $('.dogruMesaj').show();
                        }else{
                          $('.uyariMesaj').text(sonuc);
                          $('.uyariMesaj').show().fadeOut(5000);
                        }
                  }, 'json');
              e.preventDefault();
          });
        </script>
          <!-- Ajax İletişim - Bitiş -->  
          <div class="u-form-group text-center">
          <span style="display:none; margin-top:33px;" class="alert alert-success btn-block dogruMesaj"></span>
          <span style="display:none; margin-top:33px;" class="alert alert-danger btn-block uyariMesaj"></span>
          </div> 
          </div>
    </form>
</div>
</div>
<!-- Message-End -->

<?php require view('static/footer'); ?>
