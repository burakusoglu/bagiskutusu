<?php
//  $userInfo = user_info();
//  pre($userInfo);
if (post('type')) {

  $mail = post('k_mail');
  $userPass = post('k_pass');
  if (!$mail || !$userPass) {
      $errorLogin = "Boş alan bırakmayınız";
  }

  else{
          $control = $db->select('user') 
          ->where('userMail',$mail)
          ->run(true);

        if ($control) {
          if(_passUser($userPass,$control['userMail'],"verify",$db)){
            
        	$logCheck = $db->select('iplog')
          ->where('userID',session('user_id'))
          ->run();
          if($logCheck){
            $dataSize = count($logCheck);
            if($dataSize==10){
              $logDelete = $db->delete('iplog')
                    ->where('ipLogID',$logCheck[0]['ipLogID'])
                    ->done();
            }
          }
          $userInfo = user_info();
          $log_add = $db->insert('iplog')
          ->set(array(
              'userID' => session('user_id'),
              'lastIp' => $userInfo['ip_remote'],
              'city' => $userInfo['city'],
          ));

          session('userLogin',true);
          session('user_name',$control['userName']);
          session('user_mail',$control['userMail']);
          session('user_id',$control['userID']);
          setcookie("loginMail",$control['userMail']);
          $errorLogin = "ok";
          }else{
            $errorLogin = "Mail adresiniz veya şifreniz yanlış";
          }
        }else{
          $errorLogin = "Mail adresiniz veya şifreniz yanlış";
        }
    }
    echo json_encode($errorLogin);
}


 ?>