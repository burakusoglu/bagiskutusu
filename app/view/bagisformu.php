<?php require view('static/sliderHeader'); ?>

<!-- ListForm-Start -->
<div class="container">
    <div class="row">

    <div class="col-xl-7 col-lg-7 col-md-7 left-list-form">
        <div class="donater">       
         <h3>Açıklama</h3>
         <p><?= htmlspecialchars_decode($formInfo['donateDescription']); ?></p>
        </div>

        <div class="society">
            <h3>Bağışı Açan Kurum</h3>
           <a href=""> <img class="" style="width:100%;" src="<?= asset_url('img/society/').$formInfo['societyImage']; ?>"> </a>
            <p><?= $formInfo['societyText']; ?></p>
        </div>
        <div class="society-links">
            <i class="fas fa-globe"><a class="" href="<?= $formInfo['societyWeb']; ?>" target="_blank"><?= $formInfo['societyWeb']; ?></a></i>
        </div>
        <div class="society-links-phone">
            <i class="fas fa-phone"><a class="" href="tel:<?= $formInfo['societyPhone']; ?>"><?= $formInfo['societyPhone']; ?> </a></i>
        </div>
    </div>
        
    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8 col-12 right-list-form">

        <div class="card" style="width: 18rem;">
            <img src="<?= asset_url('img/donation/').$formInfo['donateImage']; ?>" class="card-img-top" alt="...">
            
            <div class="lb-form">
            <?php if($sorgu16['categoryType']==4 || $sorgu16['categoryType']==1 || $sorgu16['categoryType']==3 ){ echo '<a  class="active" id="formoney-box-link">Para</a>';} ?>
                
               <?php if($sorgu16['categoryType']==2 || $sorgu16['categoryType']==3 ){ echo '<a  class="active"  id="form-box-link">Eşya</a>';} ?>
            </div>
            <?php
                                    //toplam bağış hesabı
                                    $toplam = 0;
                                    $totalValue = $db->select('donate')
                                        ->where('donatelistID', $sorgu16['donateListID'])
                                        ->join('donater', '%s.donaterID = %s.donaterID')
                                        ->run();
                                    foreach ($totalValue as $value2) {
                                        $toplam += $value2['moneyAmount'];
                                    }
                                    //yüzdelikli bağış hesabı
                                    @$percent = ($toplam) / $sorgu16['donateAmount'] * 100;
                                    $type = $db->select('donatelist')
                                        ->where('donatelistID', $sorgu16['donateListID'])
                                        ->run(true);

                                    ?>

            <?php if($sorgu16['categoryType']==4 || $sorgu16['categoryType']==1 || $sorgu16['categoryType']==3){ ?>
         <form  action="" class="money-form <?php if($sorgu16['categoryType']==4 ||$sorgu16['categoryType']==1 || $sorgu16['categoryType']==3) {echo "itemActive";} ?>" method="post">
            <div class="card-body">
              <h5 class="card-title">Bağış Formu</h5>
              <div class="card-text">
                <h6>Toplanan: <?= $toplam ?> TL<span>Toplam: <?=$sorgu16['donateAmount']; ?> TL</span></h6>
              </div>     
            <div class="loading-bar">
            <div style="width: <?php echo floor($percent); ?>%;" class="loading-bar_progress loading-bar--html load"></div>
            </div>

            <div class="donation-amount">
                <span>Bağış Miktarı:</span>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">TL</span>
                    </div>
                     
                    <input type="number" name="dPara" data-type="currency" min="0" id="priceInput" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Bağış Tutarı" data-amount="5">
                  </div>
            </div>
              <div class="donation-amount-level">
                    <ul>
                        <li><button type="button" class="donat-level-btn" value="5" data-default="1">5.00 TL</button></li>
                        <li><button  type="button" class="donat-level-btn" value="15" data-default="0">15.00 TL</button></li>
                        <li><button  type="button" class="donat-level-btn" value="20" data-default="0">20.00 TL</button></li>
                        <li><button  type="button" class="donat-level-btn" value="50" data-default="0">50.00 TL</button></li>

                    </ul>
              </div>

              <div class="purchase-form">
                <h5>Kişisel Bilgiler</h5>
                <div class="donation-amount">
                    <span>İsmin:</span>
                  <div class="input-group input-group-sm mb-3">
                    <input type="text" class="form-control" name="dName" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="İsminiz" required>
                  </div>
                  </div>
                  <div class="donation-amount">
                    <span>Soyismin:</span>
                  <div class="input-group input-group-sm mb-3">
                    <input type="text" class="form-control" name="dSName" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Soyisminiz" required>
                  </div>
                  </div>
                  <div class="donation-amount">
                    <span>Mail Adresin:</span>
                  <div class="input-group input-group-sm mb-3">
                    <input type="text" class="form-control" name="dMail" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Mail Adresiniz" value="<?php if(isset($_COOKIE['loginMail'])){ echo $_COOKIE['loginMail'];}; ?>" required>
                  </div>
                  </div>
                    <span class="final-amount" data-total="1">Toplam Bağış Tutarınız: <span class="final-amount-total"></span> ₺</span>    
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="dIsim" class="custom-control-input" id="customCheck1" >
                        <label class="custom-control-label" for="customCheck1">İsmim Gizlensin</label>
                      </div>   
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="dHaber" class="custom-control-input" id="customCheck2" >
                        <label class="custom-control-label" for="customCheck2">Bildirimlerden Haber Al</label>
                      </div>  
                   <button type="submit" name="paraForm" class="btn btn-primary btn-lg" style="width: 100%; margin-top: 20px; background: var(--primary); border:none" value="1">Bağışı Yap</button>
                  
              </div>
            </div>

        </form> 
            <?php } ?>
        <?php if($sorgu16['categoryType']==2 || $sorgu16['categoryType']==3 ){ ?>
        <form class="item-form <?php if($sorgu16['categoryType']==2) {echo "itemActive";} ?>" action="" method="post">
            <div class="card-body">
                <h5 class="card-title">Bağış Formu</h5>
              <div class="donation-amount">
                  <span>Bağış Miktarı:</span>
                  <div class="input-group input-group-sm mb-3">
                      <div class="input-group-prepend">
                         <input type="number" class="input-group-text number-input" placeholder="0" min="0" name="numberEsya" >
                      </div>
                      <input type="text" class="form-control" name="nameEsya" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Bağış Eşyanızı Giriniz" data-amount="5" required>
                    </div>
              </div>
                <div class="purchase-form">
                  <h5>Kişisel Bilgiler</h5>
                  <div class="donation-amount">
                      <span>İsmin:</span>
                    <div class="input-group input-group-sm mb-3">
                      <input type="text" name="deName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="İsminiz" required>
                    </div>
                    </div>
                    <div class="donation-amount">
                      <span>Soyismin:</span>
                    <div class="input-group input-group-sm mb-3">
                      <input type="text" name="deSName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Soyisminiz" required>
                    </div>
                    </div>
                    <div class="donation-amount">
                      <span>Mail Adresin:</span>
                    <div class="input-group input-group-sm mb-3">
                      <input type="text" name="deMail" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Mail Adresiniz" value="<?php if(isset($_COOKIE['loginMail'])){ echo $_COOKIE['loginMail'];}; ?>" required>
                    </div>
                    </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox"  name="deIsim" class="custom-control-input" id="customCheck3" >
                        <label class="custom-control-label" for="customCheck3">İsmim Gizlensin</label>
                      </div> 
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox"   name="deHaber" class="custom-control-input" id="customCheck4" >
                        <label class="custom-control-label" for="customCheck4">Bildirimlerden Haber Al</label>
                      </div>             
                      <button type="submit" name="esyaForm" class="btn btn-primary btn-lg" style="width: 100%; margin-top: 20px; background: var(--primary); border:none" value="1">Bağışı Yap</button> 
                </div>
              </div>
        </form>
          <?php } ?>
          <div class="form-group">
            <?php
            if (isset($errorForm)) {
                echo danger($errorForm);
            }
            if (isset($cardSuccess)) {
                echo success($cardSuccess);
            }
            ?>
        </div>
        </div>
        
        </div>

    </div>
    <!-- car end -->

    </div>

<!-- Lists-Form-End -->


<?php require view('static/footer'); ?>