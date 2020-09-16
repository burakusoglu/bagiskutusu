<?php

if (post('admin_add')) {
  $username = post('username');
  $email = post('email');

  if (!$username || !$email) {
    $error = "Boş Alan Bırakmayınız.";
  }else {

  $userLink = permalink($username);

  $mailControl = $db->select('society')
  ->where('societyMail',$email)
  ->run(true);

  if($mailControl){
    $error = "Mail Adresi Zaten Kullanımda";
  }else{
    $user_add = $db->insert('society')
                             ->set(array(
                                  'societyName' => $username,
                                  'societyLink' => $userLink,
                                  'societyText' => "",
                                  'societyImage' => "",
                                  'societyAddress' => "",
                                  'societyPhone' => "",
                                  'societyMail' => $email,
                                  'societyPass' => "",
                                  'passControl' => 0,
                                  'rank' => 0
                             ));
                             if($user_add){
                              $last_id = $db->lastId();
              
                              $salt = randomPassword();
              
                              $saltAdd = $db->insert('saltsociety')
                                    ->set(array(
                                      'societyID'=>$last_id,
                                      'saltSociety'=>$salt
                                    ));
                              if($saltAdd){
                                $nPass = randomPassword(15);
                                $newPass = _pass($nPass,$email,"pass",$db);
                                
                                $passCreate = $db->update('society')
                                ->where('societyID',$last_id)
                                ->set(array(
                                    'societyPass'=>$newPass
                                ));
                                if ($passCreate) {
                                  $content = '<div style="background:#35d074;font-family:helvetica;padding-top:20px">
                                  <table width="100%" style="margin:0 auto" border="0" cellpadding="0">
                                        <tbody><tr>
                                            <td></td>
                                            <td style="max-width:600px">
                                                <table style="max-width:600px;width:100%;margin:0 auto;background-color:#ffffff;border-radius:8px" border="0" cellpadding="0" cellspacing="0">
                                                    <tbody><tr>
                                                        <td style="text-align:center;padding:10px">
                                                            <a href="">
                                                  <img src="'.asset_url("/img/header.png").'" alt="logo.png" width="100%" ></a>
                                                        </td>
                                                    </tr>
                                    <tr>
                                                        <td style="background-color:white;">
                                                            <img width="100%" src="'.asset_url("/img/content.png").'">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div style="margin:0 40px;padding:40px 0;border-bottom:1px solid #d3d3d3;max-width:600px!important;line-height:1.2;word-break:break-word;color:#4a4a56;font-size:16px">
                                                                Merhaba,
                                                                <br>
                                                                <b>Sayın
                                                                '. $username .'</b>;
                                                                <br>
                                                                <br>
                                                                <b style="font-size:18px;font-weight:bold"> Kurum kaydınız başarılı bir şekilde oluşturulmuştur. </b>
                                                                <br>
                                                                <br>
                                                                <b style="text-align:center;">E-Posta Adresiniz:</b>
                                                                <br> <span style="text-align:center; font-size:18px;font-weight:bold text-decoration:none">'. $email .'</span>
                                                                <br>
                                                                <br>
                                                                <b style="text-align:center;">Şifreniz:</b>
                                                                <br> <span style=" text-align:center;font-size:18px;">'. $nPass .'</span>
                                                                <br>
                                                                <br>
                                                                <br> Sisteme giriş yapmak için:
                                                                <br> <a href="'. admin_url('login') .'" target="_blank">'. admin_url('login') .'</a>
                                                                <br>
                                                                <br>
                                                                <br>Hatırlatma: Giriş yaptıktan sonra şifrenizi değiştirmeniz gerekmektedir.
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

                                  $mControl = $newMailSend->mailSend("Yeni Üyelik",$content,$email,$username);
                                  if($mControl){
                                    $success = "Kurum Başarıyla Eklendi";
                                    header("Refresh:2");
                                  }else{
                                    $error = "Kurum Eklenirken Bir Hata Oluştu(Mail Sistemi Hatası)";
                                  }
                                }


                              }

                            }
  }

  }
}


require view('admin/admin_add');
 ?>
