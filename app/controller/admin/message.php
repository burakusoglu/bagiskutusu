<?php
$sorguM = $db->select('contact')
            ->run();

            

            if (post('sil')) {
              $sil = post('sil');
              if (!$sil) {
                $error = "Sil Komutu Başarısız.";
              }else {
                $sorgu= $db->delete('contact')
                          ->where('contactID',$sil)
                          ->done();
                if ($sorgu) {
                  header("Refresh: 1;");

                }else {
                  $error = "Sil Komutu Başarısız.";
                }
              }
              die();
      }

 require view('admin/message');
 ?>
