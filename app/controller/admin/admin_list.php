<?php

 $request = $db->select('society')
        ->where("rank",0)
         ->run();

         if (post('sil')) {
                $sil = post('sil');
                if (!$sil) {
                  $error = "Sil Komutu Başarısız.";
                }else {

                $passR= $db->delete('resetpassword')
                        ->where('societyID',$sil)
                        ->done();   
                  $requestSalt= $db->delete('saltsociety')
                  ->where('saltsocietyID',$sil)
                  ->done();
                  if ($requestSalt) {
                        $request= $db->delete('society')
                        ->where('societyID',$sil)
                        ->done();
                  if ($request) {
                    header("Refresh: 1;");
                  }else {
                    $error = "Sil Komutu Başarısız.";
                  }
                }
        }
                die();
        }

 require view('admin/admin_list');
 ?>
