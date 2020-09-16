<?php
//Etkinlik Takip
       if (post('type')) {
              $name = post('eName');
              $mail = post('eMail');
              $id = post("actID");
              if (!$name || !$mail ) {
                    $Message = "Lütfen Boş Alan Bırakmayınız.";
              }
              elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL))  {
                $Message = "Mail Adresi Formatı Yanlış!";
              }
              else{
            
                $mailControl = $db->select('follow')
                ->where('mail',$mail)
                ->run(true);

                $idControl = $db->select('follow')
                ->where('activityID',$id)
                ->run(true);
        
                if($mailControl && $idControl){
        
                  $Message = "Mail Adresi Zaten Kullanımda";
        
                }
              else{                 
                    $sorgu = $db->insert('follow')
                                ->set(array(
                                  'activityID' => $id,
                                  'name' => $name,
                                  'mail' => $mail
                                ));
                      if ($sorgu) {
                        $Message = "ok";
                      }else {
                        $Message = "Etkinlik Takibi Oluşturulamadı";
                      }
                    }     
            }
            echo json_encode($Message);
          }

?>            