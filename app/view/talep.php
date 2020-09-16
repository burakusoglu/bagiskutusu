
<?php require view('static/sliderHeader'); ?>

<div class="container" style="margin-top: 150px!important; margin-bottom: 150px!important; ">
    <div class="demo-container">     
        <div class="container talep-img"><img src="assets/img/talep.png"></div>
        <div class="form-container cardInput active">
            <form action="" method="post"  enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="TC" >TC numarası</label>
                    <input class="form-control"  type="TC" name="tc" placeholder="11 Haneli Kimlik Kartı Numaranız" required></input>
                  </div>
                  <div class="form-group">

                  <div class="form-row">
                    <div class="col">
                      <label for="Name">Ad</label>
                      <input type="text" class="form-control" name="name" placeholder="İsminiz" required></input>
                    </div>
                    <div class="col">
                      <label for="S_Name">Soyad</label>  
                      <input type="text" class="form-control" name="sName" placeholder="Soyisminiz" required></input>
                    </div>
                  </div>
                </div>    
          <div class="form-group">
            <div class="form-row">
                    <div class="col">
                      <label for="Tel">Telefon</label>
                    <input class="form-control" id="phone" type="text" name="Phone"
                     placeholder="Başında 0 Olmadan Numaranızı Giriniz" required></input>
                    </div>
                    <div class="col">
                      <label for="Mail">Mail</label>  
                      <input type="text"  name="Mail" class="form-control" placeholder="Mail Adresinizi Giriniz" required>
                    </div>
              </div>
            </div>
      <div class="form-group">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputState">Şehir</label>
          <select id="inputState" class="form-control" name="city" > 
            <option value="0">Şehir Seçiniz</option>
            <?php if($city){
                      foreach ($city as $value) { ?>
                        <option value="<?=$value['cityID']; ?>"><?=$value['name']; ?></option>
                     <?php }} ?>
                      </select>     
                </select>
                </div>
              <div class="form-group col-md-6">
                <label for="inputState">Adres</label>
                <input type="text" class="form-control" id="inputCity" name="address"  placeholder="Açık Adresinizi Giriniz" required></input>
              </div>   
              </div>
              </div>                        
                  <div class="form-group">
                    <label for="Info">Açıklama</label>
                    <input class="form-control"  type="text" name="text" placeholder="Talebinizi Detaylandırınız" required></input>
                  </div>
                  <div class="form-group">
          <div class="uyariOrtala" style="display:block; justify-content:center;">
                      <div class="col-md-12" style="font-size:11px;">
                      <?php                     
                        echo info("bagiskutusu.org bilgilerinizi veritabanında saklama hakkına sahiptir.");
                      ?>
                      </div>
        </div></div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Yüklenecek Resim</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file" required></input>
                  </div>
                  <div class="form-group text-center">
                    <button type="submit" name="request_send" class="btn btn-success btn-block talep-btn" value="1">Gönder</button> 
                  </div>
                  <div class="form-group text-center">
                        <?php
                        if (isset($error)) {
                          echo danger($error);
                        }
                        if (isset($success)) {
                          echo success($success);
                        }
                        ?>
                    </div>      
            </form>
        </div>
       
    </div>
</div>



<?php require view('static/footer'); ?>
