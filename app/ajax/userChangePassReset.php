<?php  

if (post('type')) {

$newPassword = post('newPassword');
$newPasswordAgain = post('newPasswordAgain');
$Message = $newPassword;
if (!$newPassword || !$newPasswordAgain) {
   $Message = "Boş alan bırakmayınız";

 }else {
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
                           $Message = "Şifre güncelleme başarısız";
                       }
               }
           }else{
               $Message = "Şifre Standartlara uymuyor";
           }
           }else {
               $Message = "Yeni şifreler eşleşmiyor";
           }

 }
 echo json_encode($Message);
}

?>