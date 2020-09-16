<?php

    $sorgu = $db->select('sponsor')
             ->run();

             if (post('sil')) {
                $sil = post('sil');
                if (!$sil) {
                  $error = "Sil Komutu Başarısız.";
                }else {
                  $sorgu= $db->delete('sponsor')
                            ->where('sponsorID',$sil)
                            ->done();
                  if ($sorgu) {
                    header("Refresh: 1;");
  
                  }else {
                    $error = "Sil Komutu Başarısız.";
                  }
                }
                die();
        }
 require view('admin/sponsor_list');
 ?>
