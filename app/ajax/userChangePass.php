<?php  

if (post('type')) {

$password = post('password');
$newPassword = post('newPassword');
$newPasswordAgain = post('newPasswordAgain');

if (!$password || !$newPassword || !$newPasswordAgain) {
   $Message = "Boş alan bırakmayınız";

 }else {
   if (_passUser($password,session("user_mail"),"verify",$db)) {
       if ($newPassword == $newPasswordAgain) {
           if(passControl($newPassword)){
               $salt = randomPassword(10);
               $saltUpdate = $db->update('salt')
                     ->where('userID',session("user_id"))
                     ->set(array(
                       'salt'=>$salt
                     ));
               if($saltUpdate){
                   $newPass = _passUser($newPassword,session("user_mail"),"pass",$db);
                       $passUpdate = $db->update('user')
                       ->where('userID',session("user_id"))
                       ->set(array(
                           'userPass'=>$newPass
                       ));
                       if ($passUpdate) {
                           $Message = "ok";
                           
                       }else {
                           $Message = "Şifre güncelleme başarısız.";
                       }
               }
           }else{
               $Message = "Şifre Standartlara uymuyor";
           }
           }else {
               $Message = "Yeni şifreler eşleşmiyor.";
           }
   }else{
      $Message = "Şifrenizi yanlış girdiniz.";
   }

 }
 echo json_encode($Message);
}

?>