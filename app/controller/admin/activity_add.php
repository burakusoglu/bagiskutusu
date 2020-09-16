<?php

// Aktivite Başla
if (post('activity_add')) {
    $aName = post('activityName');
    $aPlace = post('activityPlace');
    $aDay = post('activityDay');
    $aMounth = post('activityMounth');
    $aClock = post('activityClock');
    if (!$aName || !$aPlace || !$aDay || !$aClock  || !$aMounth) {
          $error = "Lütfen Boş Alan Bırakmayınız.";
          header('Refresh:2;');
    }else{                 
          $sorgu = $db->insert('activity')
                      ->set(array(
                        'societyID' => session('admin_id'),
                        'place' => $aPlace,
                        'title' => $aName,
                        'clock' => $aClock,
                        'day' => $aDay,
                        'mounth' => $aMounth
                      ));
            if ($sorgu) {
              $success = "Etkinlik Ekleme Başarılı";
                header('Refresh:1;');
            }else {
              $error = "Etkinlik Ekleme Başarısız";
              header('Refresh:1;');
            }
          }
  }
// Aktivite Bitiş

require view('admin/activity_add');
 ?>
