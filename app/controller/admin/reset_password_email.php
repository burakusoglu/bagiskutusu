<?php
date_default_timezone_set('Europe/Istanbul');
if(!url(2)){
    header("Refresh:0; url=".admin_url('login'));
}
$linkControl = $db->select("resetpassword")
                  ->where("resetLink",url(2))
                  ->run(true);

$membership_info = $db->select("society")
                    ->where("societyID",$linkControl['societyID'])
                    ->run(true);

if(!$linkControl){
    header("Refresh:0; url=".admin_url('login'));
}else{
    if(strtotime("now")>$linkControl['endTime']){
        $linkDelete = $db->delete("resetpassword")
                  ->where("resetLink",url(2))
                  ->done();
        header("Refresh:0; url=".admin_url('login'));
    }
}


if (post('resetPassword')) {
    $newPassword = post('newPassword');
    $newPasswordAgain = post('newPasswordAgain');
   
    if (!$newPassword || !$newPasswordAgain) {
       $error = "Boş alan bırakmayınız.";
     }else {
           if ($newPassword == $newPasswordAgain) {
               if(passControl($newPassword)){
                   $salt = randomPassword();
                   $saltUpdate = $db->update('saltsociety')
                         ->where('societyID',$linkControl['societyID'])
                         ->set(array(
                           'saltsociety'=>$salt
                         ));
                   if($saltUpdate){
                       $newPass = _pass($newPassword,$membership_info['societyMail'],"pass",$db);
                           $passUpdate = $db->update('society')
                           ->where('societyID',$linkControl['societyID'])
                           ->set(array(
                               'societyPass'=>$newPass,
                               'passControl'=>1
                           ));
                           if ($passUpdate) {
                               
                               $linkDelete = $db->delete("resetpassword")
                                ->where("resetLink",url(2))
                                ->done();
                                if($linkDelete){
                                    $success = "Şifreniz başarılı bir şekilde değiştirildi.";
                                    header("Refresh:3; url=".admin_url('login'));

                                }
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
      
   
     }
}
 require view('admin/reset_password_email');


 ?>
