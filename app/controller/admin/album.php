<?php

if (post('foto_ekle')) {
  $id = url(2);
  if (!is_numeric($id)) {
    $error = "Böyle Bir Değer Olamaz";
  }else {
    $vkontrol = $db->select('galeri')
                  ->where('galeri_id',$id)
                  ->run(true);
          if (!$vkontrol) {
            $error = "Böyle Bir Albüm Yok";
          }else {
            $fotoName = post('fotoName');
            $res = resSize("res","assets/img/",4194304);
            
             if ($res=="HATA") {
                      $error = "Bir Hata Oluştu";
                    }else{
                $sorgu = $db->insert('post')
                            ->set(array(
                              'post_name' => $fotoName,
                              'post_image' => $res,
                              'post_content' => $id
                            ));
                  if ($sorgu) {
                    $succes = "Fotoğraf Eklendi.";
                      header("Refresh: 1;");
                  }else {
                    $error = "Fotoğraf Eklenemedi.";
                      header("Refresh: 1;");
                  }
              
                }
                
          }
}
}

require view('admin/album'); ?>
