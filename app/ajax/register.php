<?php
          if(post('type')) {
        

            $userName = post('c_name');
            $userMail = post('c_mail');
            $userPass = post('c_pass');
            $userPass2 = post('c_pass2');

            if (!$userName || !$userMail || !$userPass ) {
              $Message = "Boş alan bırakmayınız";
             }
             
            elseif (!filter_var($userMail, FILTER_VALIDATE_EMAIL))  {
              $Message = "Mail Adresi Formatı Yanlış!";
            }

            elseif (!passControl($userPass))  {
              $Message = "Şifre Standartlara Uygun Değil!";
            }

            
             else{
             if ($userPass == $userPass2) {
            $mailControl = $db->select('user')
            ->where('userMail',$userMail)
            ->run(true);
    
            if($mailControl){
    
              $Message = "Mail Adresi Zaten Kullanımda";
    
            }else{
    
              $userKayit = $db->insert('user')
              ->set(array(
                'userName' => $userName,
                'userMail' => $userMail,
                'userPass' => $userPass
              ));
              
              if($userKayit){
    
                $last_id = $db->lastId();
                        
                $saltCreate = randomPassword(10);
    
                $saltAdd = $db->insert('salt')
                ->set(array(
                  'userID'=>$last_id,
                  'salt'=>$saltCreate
                ));
    
              if($saltAdd){
              
              $newPass = _passUser($userPass,$userMail,"pass",$db);
    
              $passCreate = $db->update('user')
              ->where('userID',$last_id)
              ->set(array(
                'userPass'=>$newPass
              ));

              if($passCreate){
                $Message = "ok";
              }
    
              }
            }
          }
        }else {
          $Message = "Yeni şifreler eşleşmiyor.";
         }
          }
          echo json_encode($Message);

        }
    
        ?>