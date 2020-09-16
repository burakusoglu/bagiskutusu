<?php

if (post('profile_update')) {
    $text=post('sText');
    $address=post('sAddress');
    $phone=post('sPhone');
    $societyWeb=post('sWeb');

    if (!$text || !$address || !$phone) {
        $error = "Boş alan bırakmayınız.";
    }else{
        
        $sqlCom = array(
            'societyText' => $text,
            'societyAddress' => $address,
            'societyPhone' => $phone,
            'societyWeb' => $societyWeb
        );
        
        if(!empty($_FILES['sLogo'])){
            $sLogo = resSize($_FILES['sLogo'],"assets/img/society/",4194304,$membership_info['societyLink']);
            if ($sLogo=="HATA") {
                $error = "Resim Eklenmedi";
                header('Refresh:2;');
            }else{
                $sqlCom = array_merge($sqlCom,array(
                    'societyImage' => $sLogo
                ));
            }
        }
        
        $societInfoUpdate = $db->update('society')
        ->where('societyID',session("admin_id"))
        ->set($sqlCom);

        if ($societInfoUpdate) {
            $success = "Bilgiler başarılı bir şekilde güncellendi.";
            header('Refresh:2;');
          }else {
            $error = "Güncelleme başarısız";
            header('Refresh:2;');
          }

    }
}

if (post('new_password')) {

    $password = post('password');
    $newPassword = post('newPassword');
    $newPasswordAgain = post('newPasswordAgain');
   
    if (!$password || !$newPassword || !$newPasswordAgain) {
       $error = "Boş alan bırakmayınız.";
       header("Refresh:2");
     }else {
       if (_pass($password,$membership_info['societyMail'],"verify",$db)) {
           if ($newPassword == $newPasswordAgain) {
               if(passControl($newPassword)){
                   $salt = randomPassword();
                   $saltUpdate = $db->update('saltsociety')
                         ->where('societyID',session("admin_id"))
                         ->set(array(
                           'saltsociety'=>$salt
                         ));
                   if($saltUpdate){
                       $newPass = _pass($newPassword,$membership_info['societyMail'],"pass",$db);
                           $passUpdate = $db->update('society')
                           ->where('societyID',session("admin_id"))
                           ->set(array(
                               'societyPass'=>$newPass,
                               'passControl'=>1
                           ));
                           if ($passUpdate) {
                               $success = "Şifreniz başarılı bir şekilde değiştirildi.";
                               header("Refresh:2");
                           }else {
                               $error = "Şifre güncelleme başarısız.";
                           }
                   }
               }else{
                   $error = "Şifre standart dışı";
               }
               }else {
                   $error = "Yeni şifreler eşleşmiyor.";
               }
       }else{
          $error = "Şifrenizi yanlış girdiniz.";
       }
   
     }
}

require view('admin/profile');
 ?>
