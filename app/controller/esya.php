<?php
//cerez var mı yok mu kontrol yoksa anasayfa

if (!isset($_COOKIE['formEsya']) ) {
    header('Refresh:0; url=' . site_url('index'));
    // || !isset($_COOKIE['formName']) || !isset($_COOKIE['formDSName']) || !isset($_COOKIE['formMail']) || !isset($_COOKIE['formdHaber'])  || !isset($_COOKIE['formdIsim'])
    die();
} else {
    if (post('esyaOnay')) {

        $esyaAdres = post('esyaAdres');
        if (!$esyaAdres) {
            $cardError = "Gerekli Alanı Doldurunuz";
        } else {
                $donateList = $db->select('donatelist')
                    ->where("donateListID", $_COOKIE['donateListID'])
                    ->run(true);
                $donaterSecretType = 0;
                $notification = 0;

                if ($donateList) {
                    if (@$_COOKIE['formdIsim'] == "on") {
                        @$donaterSecretType = 1;
                    } else if (@$_COOKIE['formdIsim'] == "off") {
                        @$donaterSecretType = 0;
                    }

                    if (@$_COOKIE['formdHaber'] == "on") {
                        @$notification = 1;
                    } else if (@$_COOKIE['formdHaber'] == "off") {
                        @$notification = 0;
                    }

                    $donater = $db->insert('donater')
                        ->set(array(
                            'donateType' => $donateList['categoryID'],
                            'donaterName' => $_COOKIE['formName'],
                            'donaterSurname' => $_COOKIE['formDSName'],
                            'donaterMail' => $_COOKIE['formMail'],
                            'donaterSecretType' => $donaterSecretType,
                            'notification' => $notification,
                            'itemCount' => $_COOKIE['formEsyaC'],
                            'itemName' => $_COOKIE['formEsya']
                        ));
                    if ($donater) {


                        $donater = $db->insert('donate')
                            ->set(array(
                                'donateListID' => $_COOKIE['donateListID'],
                                'donaterID' => $db->lastId()
                            ));
                        if ($donater) {
                            $cardSuccess = "Bağışınız alınmıştır! Mail adresinize teşekkür belgeniz gönderilmiştir.";
                            $content = '<div style="background:#35d074;font-family:helvetica;padding-top:20px">
                            <table width="100%" style="margin:0 auto" border="0" cellpadding="0">
                                  <tbody><tr>
                                      <td></td>
                                      <td style="max-width:600px">
                                          <table style="max-width:600px;width:100%;margin:0 auto;background-color:#ffffff;border-radius:8px" border="0" cellpadding="0" cellspacing="0">
                                              <tbody><tr>
                                                  <td style="text-align:center;padding:10px">
                                                      <a href="">
                                            <img src="'.asset_url("/img/header-thanks.png").'" alt="logo.png" width="100%" ></a>
                                                  </td>
                                              </tr>
                              <tr>
                                                 
                                              </tr>
                                              <tr>
                                                  <td>
                                                      <div style="margin:0 40px;padding:40px 0;border-bottom:1px solid #d3d3d3;max-width:600px!important;line-height:1.2;word-break:break-word;color:#4a4a56;font-size:16px">
                                                          Merhaba,
                                                          <br>
                                                          <b>Sayın
                                                          '. ucfirst($_COOKIE['formName']) .' '. strtoupper_tr(($_COOKIE['formDSName'])) .' </b>;
                                                          <br>
                                                          <br>
                                                          <b style="font-size:18px;font-weight:bold"> '. $_COOKIE['formEsyaC'].' adet, '. strtoupper_tr($_COOKIE['formEsya']).'  adlı eşya bağışınız için TEŞEKKÜR EDERİZ. </b>
                                                          <br>
                                        
                                                          <br>
                                                          <br>
                                                         
                                                          <br>
                                                          <br>
                                                          <br>Hatırlatma: Bağış Kutusu yapmış olduğunuz bağışlardan ücret talep etmez!
                                                          <br>
                                                          <br>
                                                      </div>
                                                  </td>
                                              </tr>
                                             <tr>
                                                  <td style="text-align:center;padding:30px">
                                                      <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:400px;margin:0 auto;text-align:center">
                                                          <tbody><tr>
                                                              <td width="25%">
                                                                  <a href="facebook.com" target="_blank">
                                                      <img src="'.asset_url("/img/facebook.png").'" alt="facebook"></a>
                                                              </td>
                                                              <td width="25%">
                                                                  <a href="twitter.com" target="_blank">
                                                        <img src="'.asset_url("/img/twitter.png").'" alt="twitter"></a>
                                                              </td>
                                                              <td width="25%">
                                                                  <a href="linkedin.com" target="_blank">
                                                          <img src="'.asset_url("/img/linkedin.png").'" alt="linkedin"></a>
                                                              </td>
                                                              <td width="25%">
                                                                  <a href="instagram.com">
                                                            <img src="'.asset_url("/img/instagram.png").'" alt="instagram"></a>
                                                              </td>
                                                          </tr>
                                                      </tbody></table>
                                                  </td>
                                              </tr>
                                          </tbody></table>
                                          <table style="max-width:680px;width:100%;margin:0 auto;text-align:center">
                                              <tbody><tr>
                                                  <td>
                                                      <table width="100%" style="text-align:center;margin:20px 0;color:#4a4a56">
                                                          <tbody><tr>
                                                              <td>
                                                                  <a href="" target="_blank">
                                                                    <img src="'.asset_url("/img/bk_white.png").'" height="25%"></a>
                                                              </td>
                                                          </tr>
                                                          <tr>
                                                              <td style="color:white; font-size:18px;padding:30px 0; text-decoration:none; hover: color:white;">
                                                              © 2020 <a href="https://www.bagiskutusu.org"  style="color:white; text-decoration:none;" target="_blank">bagiskutusu.org</a> Sistem Sağlayıcı
                                                              </td>
                                                          </tr>
                                                          <tr>
                                                          </tr>
                                                      </tbody></table>
                                                  </td>
                                              </tr>
                                          </tbody></table>
                                      </td>
                                      <td></td>
                                  </tr>
                              </tbody></table>
                          </div>';
                            $mControl2 = $newMailSend->mailSend("Bağışınız İçin Teşekkürler", $content, $_COOKIE['formMail'], $_COOKIE['formName']);
                            if ($mControl2) {
                                setcookie("formEsyaC", "", -1, "/");
                                setcookie("formEsya", "", -1, "/");
                                setcookie("formName", "", -1, "/");
                                setcookie("formDSName", "", -1, "/");
                                setcookie("formMail", "", -1, "/");
                                @setcookie("formdIsim", "",-1, "/");
                                @setcookie("formdHaber", "", -1, "/");
                                setcookie("donateListID","", -1, "/");
                                header("Refresh:4; url=".site_url());
                            }
                        }
                    }
                }
            }
        
    }
}

require view('esya');
//  <?php  
//     
    
 //   <!-- 