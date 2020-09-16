<?php
$id = url(2);
if (!is_numeric($id)) {
  $error = "Böyle Bir Değer Olamaz";
}else {


  $catValue = $db->select('category')
  ->where('categoryID',$id)
  ->run(true);
  
if(!$catValue){
header("Refresh:0; url=".admin_url('category_list'));
die();
}


      if (post('activity_update')) {
        $catName = post('catName');
        $catDes = post('catDes');
        $catNo = post('catNo');

        if (!$catName || !$catDes  || !$catNo ) {
          $error = "Gerekli alanlarını boş bırakmayınız.";
          header('Refresh:2;');
        }else {
          $veri = $db->update('category')
                      ->where('categoryID',$id)
                         ->set(array(
                          'categoryName'=> $catName,
                          'categoryDescription' => $catDes,
                          'categoryType' => $catNo
                         ));
              if ($veri) {
                $success = "Güncelleme başarılı";
                header('Refresh:2;');
              }else {
                $error = "Güncelleme başarısız";
              }
        }
      }
    }    
      
require view('admin/category_edit'); ?>



   