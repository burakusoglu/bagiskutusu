<?php
$sorgu = $db->select('settings')
->run(true);
if (post('aboutUpdate')) {
    $title = post('aboutText');
    if (!$title) {
      $error = "Hakkımızda Alanı Boş Bırakılamaz.";
    }else {
      $guncelle = $db->update('settings')
                     ->set(array(
                      'hakkimizda'=> $title,
                     ));
          if ($guncelle) {
            $succes = "Güncelleme Başarılı";
            header('Refresh:2;');
          }else {
            $error = "Güncelleme Başarısız";
          }
    }
  }
















require view('admin/about');

?>