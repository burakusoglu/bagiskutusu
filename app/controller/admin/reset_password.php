<?php
date_default_timezone_set('Europe/Istanbul');
if (post('resetPassword')) {
  $username = post('username');
  $response = post('g-recaptcha-response');

  if (!$username) {
      $error = "Boş Alan Bırakmayınız.";
  }else{
     if(reCaptcha($response,"6LfDsegUAAAAAN8VRPO0mb9W4UM2cOmWsWD0YHYm")){
          $control = $db->select('society') 
          ->where('societyMail',$username)
          ->run(true);
  
        if ($control) {
         $resetLink = randomPassword(100,"link");
         $endTime = strtotime("+1 day");
         $societyID = $control['societyID'];
         
         $link = admin_url("reset_password_email/").$resetLink;

         $resetControl = $db->select('resetpassword')
                        ->where('societyID',$societyID)
                        ->run(true);
          if($resetControl){
            $command = $db->update('resetpassword')
            ->where('societyID',$societyID)
            ->set(array(
              'societyID'=>$societyID,
              'resetLink'=>$resetLink,
              'endTime'=>$endTime
            ));
          }else{
            $command = $db->insert('resetpassword')
            ->set(array(
              'societyID'=>$societyID,
              'resetLink'=>$resetLink,
              'endTime'=>$endTime
            ));
          }
          
         if($command){
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
                                    <img width="100%" src="'.asset_url("/img/contentpass.png").'">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="margin:0 40px;padding:40px 0;border-bottom:1px solid #d3d3d3;max-width:600px!important;line-height:1.2;word-break:break-word;color:#4a4a56;font-size:16px">
                                        Merhaba,
                                        <br>
                                        <b>Sayın
                                        '. $control['societyName'] .'</b>;
                                        <br>
                                        <br>
                                        <b style="font-size:18px;font-weight:bold"> Şifre yenileme bağlantınız başarılı bir şekilde oluşturulmuştur. </b>
                                        <br>
                                        <br>
                                        <b style="text-align:center;">Şifre Yenileme Bağlantınız:</b>
                                        <br> <a href="'. $link .'" style="text-align:center; font-size:18px;font-weight:bold text-decoration:none">'. $link .'</a>
                                        <br>
                                        <br>

                                        <br>
                                        <br>
                                        <br> Sisteme giriş yapmak için:
                                        <br> <a href="'. admin_url('login') .'" target="_blank">'. admin_url('login') .'</a>
                                        <br>
                                        <br>
                                        <br>Hatırlatma: Eğer Şifre yenileme bağlantısını siz göndermediyseniz herhangi bir şey yapmanıze gerek yoktur!
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

          $mControl = $newMailSend->mailSend("Şifre Yenileme",$content,$username,$control['societyName']);
          if($mControl){
            $success = "Şifre yenileme bağlantınız mail adresinize gönderildi. Bağlantı linki 24 saat geçerlidir.";
          }
         }

        }else{
          $success = "Şifre yenileme bağlantınız mail adresinize gönderildi. Bağlantı linki 24 saat geçerlidir.";
        }
      }else{
        $error = "Bot Algılandı";
      }
    }
}
 require view('admin/reset_password');


 ?>
