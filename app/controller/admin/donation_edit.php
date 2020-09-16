<?php
$category = $db->select('category') 
->run();

$id = url(2);
if (!is_numeric($id)) {
  $error = "Böyle Bir Değer Olamaz";
}else {


  $Value = $db->select('donatelist')
  ->join('category', '%s.categoryID = %s.categoryID')
  ->where('donateListID',$id)
  ->where('societyID',session('admin_id'))
  ->run();
 
if(!$Value){
header("Refresh:0; url=".admin_url('donation_list'));
die();
}

      if (post('kurum_edit')) {
        $title = post('postName');
        $amount = post('postAmount');
        $text = post('postText');
        if (!$title || !$amount  || !$text  ) {
          $error = "Gerekli alanlarını boş bırakmayınız.";
          header('Refresh:2;');
        }else {
          $veri = $db->update('donatelist')
                      ->where('donatelistID',$id)
                         ->set(array(
                          'donateName'=> $title,
                          'donateAmount' => $amount,
                          'donateDescription' => $text,
                         ));
              if ($veri) {
                $success = "Güncelleme başarılı";
                header('Refresh:2;');
              }else {
                $error = "Güncelleme başarısız";
              }
        }
      }
    
    if (post('para_edit')) {
      $dtitle = post('dTitle');
      $dcontent = post('dContent');
      $damount= post('dAmount'); 
      if (!$dtitle || !$damount  ) {
        $error = "Gerekli alanlarını boş bırakmayınız.";
        header('Refresh:2;');
      }else {
        $veri = $db->update('donatelist')
                    ->where('donatelistID',$id)
                       ->set(array(
                        'donateName'=> $dtitle,
                        'donateAmount' => $damount,
                        'donateDescription' => $dcontent,
                       ));
            if ($veri) {
              $success = "Güncelleme başarılı";
              header('Refresh:2;');
            }else {
              $error = "Güncelleme başarısız";
            }
      }
    }

    if (post('mal_edit')) {
      $utitle = post('uName');
      $ucontent = post('uContent');
      if (!$utitle ) {
        $error = "Gerekli alanlarını boş bırakmayınız.";
        header('Refresh:2;');
      }else {
        $veri = $db->update('donatelist')
                    ->where('donatelistID',$id)
                       ->set(array(
                        'donateName'=> $utitle,
                        'donateDescription' => $ucontent,
                       ));
            if ($veri) {
              $success = "Güncelleme başarılı";
              header('Refresh:2;');
            }else {
              $error = "Güncelleme başarısız";
            }
      }
    }

    if (post('pm_edit')) {
      $ititle = post('iuName');
      $icontent = post('iContent');
      $iamount= post('iAmount');
      if (!$ititle || !$iamount ) {
        $error = "Gerekli alanlarını boş bırakmayınız.";
        header('Refresh:2;');
      }else {
        $veri = $db->update('donatelist')
                    ->where('donatelistID',$id)
                       ->set(array(
                        'donateName'=> $ititle,
                        'donateAmount' => $iamount,
                        'donateDescription' => $icontent,
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
      
require view('admin/donation_edit'); ?>



   