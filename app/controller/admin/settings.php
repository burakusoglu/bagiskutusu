<?php

if (post('settingsUpdate')) {
  $title = post('title');
  $description = post('description');
  $facebook = post('facebook');
  $twitter = post('twitter');
  $instagram = post('instagram');
  $linkedin = post('linkedin');
  $email = post('email');
  $systemMessage = post('systemMessage');

  if (!$title || !$description) {
    $error = "Başık ve açıklama alanlarını boş bırakmayınız.";
  }else {
    $guncelle = $db->update('setting')
                   ->set(array(
                    'title'=> $title,
                    'description' => $description,
                    'facebookLink' => $facebook,
                    'twitterLink' => $twitter,
                    'instagramLink' => $instagram,
                    'linkedinLink' => $linkedin,
                    'mail' => $email,
                    'announcment' => $systemMessage
                   ));
        if ($guncelle) {
          $succes = "Güncelleme başarılı";
          header('Refresh:2;');
        }else {
          $error = "Güncelleme başarısız";
        }
  }
}




require view('admin/settings');
 ?>
