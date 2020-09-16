<?php
            if (post('type')) {
              $cName = post('cName');
              $cMail = post('cMail');
              $cText = post('cText'); 
              if (!$cName || !$cMail || !$cText ) {
                $Message = "Boş alan bırakmayınız.";
            }
            // elseif (!filter_var($cMail, FILTER_VALIDATE_EMAIL))  {
            //   $Message = "Mail Adresi Formatı Yanlış!";
            // }
            elseif (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$cMail))  {
              $Message = "Mail Adresi Formatı Yanlış!";
            }
            else{              
                    $AddEventFollow = $db->insert('contact')
                                ->set(array(
                                  'message' => $cText,
                                  'cName' => $cName,
                                  'cMail' => $cMail,
                                  'cIp' => $_SERVER['REMOTE_ADDR']
                                ));
                      if ($AddEventFollow) {
                        $Message = "okw";                        
                      }else {
                        $Message = "Mesaj Gönderilirken Bir Hata Oluştu";
                      }
                    }
                    echo json_encode($Message);
            }
?>