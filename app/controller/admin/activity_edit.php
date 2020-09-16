<?php
$id = url(2);
if (!is_numeric($id)) {
  $error = "Böyle Bir Değer Olamaz";
}else {


  $activityValue = $db->select('activity')
  ->where('activityID',$id)
  ->where('societyID',session('admin_id'))
  ->run(true);
  
if(!$activityValue){
header("Refresh:0; url=".admin_url('activity_list'));
die();
}


      if (post('activity_update')) {
        $aUpdate = post('activity_update');
        $title = post('postName');
        $place = post('postPlace');
        $day = post('postDay');
        $mounth = post('postMounth');
        $clock = post('postClock'); 
        if (!$title || !$place  || !$day  || !$clock || !$mounth) {
          $error = "Gerekli alanlarını boş bırakmayınız.";
          header('Refresh:2;');
        }else {
          $veri = $db->update('activity')
                      ->where('activityID',$id)
                         ->set(array(
                          'place'=> $place,
                          'title' => $title,
                          'day' => $day,
                          'mounth' => $mounth,
                          'clock' => $clock
                         ));
              if ($veri) {
                $success = "Güncelleme başarılı";

                $activity = $db->select('activity')
                ->where('activityID',$id)
                ->run(true);

                $followMailData2 = $db->select('follow')
                ->where('activityID',$id)
                ->run();
                
                if($followMailData2){
                  foreach ($followMailData2 as $value) {
                    $content = '<div style="background:#35d074;font-family:helvetica;padding-top:20px">
                    <table width="100%" style="margin:0 auto" border="0" cellpadding="0">
                          <tbody><tr>
                              <td></td>
                              <td style="max-width:600px">
                                  <table style="max-width:600px;width:100%;margin:0 auto;background-color:#ffffff;border-radius:8px" border="0" cellpadding="0" cellspacing="0">
                                      <tbody><tr>
                                          <td style="text-align:center;padding:10px">
                                              <a href="">
                                    <img src="'.asset_url("/img/header-activity.png").'" alt="logo.png" width="100%" ></a>
                                          </td>
                                      </tr>
                      <tr>
                                          <td style="background-color:white;">
                                              <img width="100%" src="'.asset_url("/img/content-notificationt.png").'">
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <div style="margin:0 40px;padding:40px 0;border-bottom:1px solid #d3d3d3;max-width:600px!important;line-height:1.2;word-break:break-word;color:#4a4a56;font-size:16px">
                                                  Merhaba,
                                                  <br>
                                                  <b>Sayın
                                                  '. $value['name'] .'</b>;
                                                  <br>
                                                  <br>
                                                  <b style="font-size:18px;font-weight:bold"> '. $activity['title'] .' adlı etkinlik bilgilerinde güncelleme olmuştur. </b>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <b> Etkinlik Yeri: '. $activity['place'] .'</b>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <b> Etkinlik Tarihi: ' . $activity['day'] .' - ' . $activity['mounth'] .'</b>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <b> Etkinlik Saati: '. $activity['clock'] .'</b>
                                                  <br>
                                                  <br>
                                                 
                                                  <br>
                                                  <br>
                                                  <br>Hatırlatma: Etkinlik iptal veya değişiklik durumları sistem sağlayıcısı olan bagiskutusu.org ile ilgili değildir!
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
          
                    $mControl2 = $newMailSend->mailSend("Etkinlik Bildirimi",$content,$value['mail'],$value['name']);
                
                  }
                }

                header('Refresh:2;');
              }else {
                $error = "Güncelleme başarısız";
              }
        }
      }
    }    
      
require view('admin/activity_edit'); ?>



   