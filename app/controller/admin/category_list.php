<?php

 $sorgu = $db->select('category')
         ->run();
        
         if (post('sil')) {
            $sil = post('sil');
            $delete= $db->delete('category')
                    ->where('categoryID',$sil)
                    ->done();
                    if ($delete) {
                      header("Refresh: 1;");

                    }else {
                      $error = "Sil Komutu Başarısız.";
                    }
                  
                  
                }
        



 require view('admin/category_list');
 ?>
