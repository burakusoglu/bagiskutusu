<?php

// Aktivite Başla
if (post('cat_add')) {
    $catName = post('catName');
    $catContent = post('catContent');
    $catNo = post('catNo');

    if (!$catName || !$catContent || !$catNo ) {
          $error = "Lütfen Boş Alan Bırakmayınız.";
          header('Refresh:2;');
    }else{                 
          $sorgu = $db->insert('category')
                      ->set(array(
                        'categoryName' => $catName,
                        'categoryDescription' => $catContent,
                        'categoryType' => $catNo
                      ));
            if ($sorgu) {
              $success = "Kategori Ekleme Başarılı";
               
            }else {
              $error = "Kategori Ekleme Başarısız";
              header('Refresh:1;');
            }
          }
  }
// Aktivite Bitiş

require view('admin/category_add');
 ?>
