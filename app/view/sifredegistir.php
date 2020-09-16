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
  <div class="container" id="password-change">
  <h4 class="profile-subtitle"> Yeni Şifre Oluşturma </h4>
  <div class="form-container passInput active">
  <form method="post">

    
        <div class="form-group"><label for="exampleInputEmail1">Yeni Şifreniz</label></div>
        <div class="input-group mb-3">
          <input type="password"  id="newPassword"   class="form-control" placeholder="Yeni Şifreniz" aria-label="Yeni Şifre" aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="myNewFunction3()"><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="form-group"><label for="exampleInputEmail1">Yeni Şifreniz Tekrar</label></div>
        <div class="input-group mb-3">
          <input type="password" id="newPasswordAgain" class="form-control" placeholder="Yeni Şifreniz" aria-label="Yeni Şifre" aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="myNew2Function3()"><i class="fas fa-eye"></i></button>
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
              var pass1 = $("#newPassword").val();
              var pass2 = $("#newPasswordAgain").val();
                  $.post(ajax_url,{'type':'userChangePassReset','newPassword':pass1,'newPasswordAgain':pass2},function(sonuc){
                    //  console.log(sonuc);
                      if(sonuc == "ok"){    
                        self.location = 'https://www.bagiskutusu.org/kullanicisayfasi';
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
  <!-- Follow End -->
</div>
<style type="text/css">
  #password-change{
    display: block !important; 
  }
</style>
<!-- Profile-End -->
<?php require view('static/footer'); ?>