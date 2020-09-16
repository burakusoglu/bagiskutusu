<?php require view('static/sliderHeader'); ?>

       <div class="profile-back"> 
        <div class=" profile-text ">   
             <div class="container">
                 <h2 class="profile-txt">PROFİL</h2>
             </div>   
             <div class="profile-img">
               <i class="fas fa-user-circle" style="color: white; font-size: 18px;"></i>
             </div>      
        </div>   
     </div>


<!-- Profile-Start -->
<div class="container-fluid " style="margin-top: 150px !important; margin-bottom: 350px!important;">
  <div class="row">
  <form method="post" style="display:contents!important;">
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 profile-tabs">
      <button type="button" class="btn btn-profile btn-lg"  style="width: 58%; font-size: 17px;" id="prof-foll"><i class="fas fa-heart"></i> TAKİPLERİM</button>
    </div>

    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 profile-tabs">
      <button type="button" class="btn btn-profile btn-lg" style="width: 58%; font-size: 17px;" id="prof-set"><i class="fas fa-user"></i> HESABIM</button>
     </div>
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 profile-tabs">
      <button type="button" class="btn btn-profile btn-lg"  style="width: 58%; font-size: 17px;" id="prof-sec"><i class="fas fa-lock"></i> GİZLİLİK</button>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 profile-tabs">

    
      <button type="submit" class="btn btn-profile btn-lg" value="1" name="cikis" style="width: 58%; font-size: 17px;"><i class="fas fa-sign-out-alt"></i> ÇIKIŞ YAP</button>
    </div>
    </form>

  </div>
  
  <div class="container profile-settings" id="prof-settings">
    <h4 class="profile-subtitle"> Hesap İşlemleri </h4>
    <div class="container profile-buttons">
      <button type="button" class="btn btn-name-sname btn-lg"><i class="fas fa-id-card"></i> <?php echo $userInfo['userName'] ?></button>
    </div>
    <div class="container profile-buttons">
      <button type="button" class="btn btn-name-sname btn-lg"><i class="fas fa-envelope"></i> <?php echo $userInfo['userMail'] ?></button>
    </div>
    <!-- <div class="container profile-buttons">
      <button type="button" class="btn btn-name-sname btn-lg"  data-toggle="modal" data-target="#defaultBox"><i class="fas fa-envelope-open"></i>Mesajlarım<a href=""><i class="fas fa-chevron-right next" ></i></a></button>
    </div> -->
 
    <div class="container profile-buttons">
      <button type="button" class="btn btn-gift btn-lg"><i class="fas fa-gift"></i>Toplam Bağış Tutarı: <span class="total-donate">0 TL</span></button>
    </div>
  </div>
  <div class="container profile-settings" id="prof-securety">
    <h4 class="profile-subtitle"> Gizlilik İşlemleri </h4>
    <div class="container profile-buttons">
      <button type="button" class="btn btn-secure btn-lg" id="pass-change"><i class="fas fa-lock"></i>Şifre İşlemleri<br><a href=""><i class="fas fa-chevron-right next"></i></a></button>
    </div>
    <div class="container profile-buttons">
      <button type="button" class="btn btn-secure btn-lg" data-toggle="modal" data-target="#infoModal"><i class="fas fa-info-circle"></i>Bilgi<br><a href=""><i class="fas fa-chevron-right next"></i></a></button>
    </div>
    <div class="container profile-buttons">
      <button type="button" class="btn btn-secure btn-lg"  data-toggle="modal" data-target="#messageModal"><i class="fas fa-envelope-open" ></i>İletişim<br><a href=""><i class="fas fa-chevron-right next"></i></a></button>
    </div>
  </div>

<!-- Password Change -->
<div class="container" id="password-change">
  <h4 class="profile-subtitle"> Şifre İşlemleri </h4>
  <div class="form-container passInput active">
  <form method="post">


    <div class="form-group"><label for="exampleInputEmail1">Eski Şifreniz</label></div>
    <div class="input-group mb-3">
      <input type="password" id="myPass" class="form-control password" placeholder="Yeni Şifreniz" aria-label="Yeni Şifre" aria-describedby="button-addon2">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="myFunction()"><i class="fas fa-eye"></i></button>
      </div>
    </div>
        <div class="form-group"><label for="exampleInputEmail1">Yeni Şifreniz</label></div>
        <div class="input-group mb-3">
          <input type="password"  id="myNewPass"   class="form-control newPassword" placeholder="Yeni Şifreniz" aria-label="Yeni Şifre" aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="myNewFunction()"><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="form-group"><label for="exampleInputEmail1">Yeni Şifreniz Tekrar</label></div>
        <div class="input-group mb-3">
          <input type="password" id="myNew2Pass" class="form-control newPasswordAgain" placeholder="Yeni Şifreniz" aria-label="Yeni Şifre" aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="myNew2Function()"><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="form-group text-center" style="margin-top: 35px;">
          <button type="submit" id="change_password" value="1" class="btn btn-success btn-block ">Onayla</button> 
        </div>
          <div class="form-group">
                      <div class="col-md-12">
                      <?php 
                        echo info("Şifre Kuralı: Şifreniz en az 8 karakter, büyük harf, küçük harf ve sayı içermelidir.");
                      ?>
                      </div>
        </div>
                       <!-- Ajax Şifre Değiştirme - Bitiş -->
                       <script>
                  $('#change_password').on('click',function(e){
              var pass = $("#myPass").val();  
              var pass1 = $("#myNewPass").val();
              var pass2 = $("#myNew2Pass").val();
                  $.post(ajax_url,{'type':'userChangePass','password':pass,'newPassword':pass1,'newPasswordAgain':pass2},function(sonuc){
                    
                      if(sonuc == "ok"){
                          location.reload();
                          $('.dogruPass').text("Şifre Değiştirme Başarılı");
                          $('.dogruPass').show();
                          $('.uyariPass').hide();
                        }else{
                          $('.uyariPass').text(sonuc);
                          $('.uyariPass').show();
                        }
                  }, 'json');
              e.preventDefault();
          });
                </script>
          <!-- Ajax Şifre Değiştirme - Bitiş -->  
      <div class="form-group text-center">
       <div class="col-md-12">
       <span style="display:none;" class="alert alert-success btn-block dogruPass"></span>
        <span style="display:none;" class="alert alert-danger btn-block uyariPass"></span>
       </div>
     </div>
  </form>
</div>
</div>


<!-- Message Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="messageModalLabel">Mail Adresi İletişimi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color: var(--primary); font-weight: bold;">
       <a href="mailto:iletisim@bagiskutusu.org" style="color:#383838;"> iletisim@bagiskutusu.org</a>
      </div>
    </div>
  </div>
</div>

<!-- Info Modal -->
<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="infoModalLabel">Bağış Kutusu Hakkında Bilgilendirme</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color: var(--text-title); font-weight: bold;">
        Bağış Kutusu projesi yamamen gönüllü öğrenciler tarafından oluşturulup, güvenli bağış yapabileceğiniz bir platformdur.
      </div>
    </div>
  </div>
</div>
<!-- Follows -->

<div class="container-fluid ref"  id="prof-follows">
            <div class="row">
            <div style="margin-top:50px;" class="row">
            <?php if($favoriteInfo){
           foreach ($favoriteInfo as $value) { ?>  
                <div class="col-xl-4 col-lg-6 col-md-12  col-sm-12 ">
                  <div class="card card-service">
                  <form method="post">
                   <?php if(session("user_name")){ ?>   
                   <div  id="followDonate" style="border:none; background:none;" class="btnDonate"><span class="like" style="position:static;">
                   <?php if(session('user_id')){
                    //Beğeni varsa direkt ekranda yeşil göstermek için       
                   $favControl2 = $db->select('favorite')
                   ->where('userID',session('user_id'))
                   ->where('donatelistID',$value['donateListID'])
                   ->run(true);
           
                           ?>
                   <i style= "cursor:pointer;" class="fas fa-heart _favH  <?php if($favControl2){echo "active";} ?>" donate-id="<?= $value['donateListID']; ?>"></i>
                       <?php } ?> 
                   </i></span> </div>

                   <input type="hidden" name="donateList" id="donateList"></input>        
                   <?php } ?>
     </form> 
                        <img class="refImage" src="<?php echo asset_url('img/donation/').$value['donateImage']; ?>" alt="">
                        <div class="card-body text-center">
                       <h5 class="card-title"><a class="refLink" href="<?php echo site_url('bagisformu/').$value['donateLink']; ?>"><?php echo $value['donateName']; ?></a></h5>
                      </div>
                    </div>
               </div>
               <?php }} ?>     

                </div>   
        </div>         
          </div>
  <!-- Follow End -->
         <!-- Ajax Fav Ekleme - Bitiş -->
         <script>
                       $('._favH').on('click',function(e){
                       var dl = $(this).attr('donate-id');
                       // console.log(dl);
                       var btn = $(this);
                       $.post(ajax_url,{'type':'followDonate','donateList':dl},function(sonuc){
                           
                          if(sonuc == "fav"){
                               btn.addClass('active'); 
                               location.reload(); 
                           }else if(sonuc == "nofav"){
                               btn.removeClass("active");
                               location.reload();
                           }
                               }, 'json');
                           e.preventDefault();
                       });
                       </script>
               <!-- Ajax Fav Ekleme - Bitiş -->  
</div>
<!-- Profile-End -->
<?php require view('static/footer'); ?>