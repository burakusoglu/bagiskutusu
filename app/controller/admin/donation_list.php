<?php
$sorgu = $db->select('donatelist')
            ->join('category', '%s.categoryID = %s.categoryID')
            ->where("societyID",session('admin_id'))
            ->run();

            

            if (post('sil')) {
              $sil = post('sil');
              if (!$sil) {
                $error = "Sil Komutu Başarısız.";
              }else {
                $sorgu= $db->delete('donatelist')
                          ->where('donateListID',$sil)
                          ->done();
                if ($sorgu) {
                  header("Refresh: 1;");

                }else {
                  $error = "Sil Komutu Başarısız.";
                }
              }
              die();
      }

 require view('admin/donation_list');
 ?>
