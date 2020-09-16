<?php

if (post('giris')) {
  $username = post('username');
  $password = post('password');
  $response = post('g-recaptcha-response');

  if (!$username || !$password) {
      $error = "Boş alan bırakmayınız.";
  }else{
      if(reCaptcha($response,"6LfDsegUAAAAAN8VRPO0mb9W4UM2cOmWsWD0YHYm")){
          $control = $db->select('society') 
          ->where('societyMail',$username)
          ->run(true);
  
        if ($control) {
          if(_pass($password,$control['societyMail'],"verify",$db)){
            session('login',true);
            session('admin_name',$control['societyName']);
            session('admin_id',$control['societyID']);
            header('Location:' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : admin_url()));
          }else{
            $error = "Mail adresiniz veya şifreniz yanlış.";
          }
        }else{
          $error = "Mail adresiniz veya şifreniz yanlış.";
        }
      }else{
        $error = "Bot algılandı";
      }
    }
}

/* Eğer giriş yaptıysa indexe direk yönlendiriyor */
if (session('login')) {
    header('Location:' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : admin_url()));
}

 require view('admin/login');
 ?>
