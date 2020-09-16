<?php
$city = $db->select('city') 
->run();

if (post('request_send')) {
    $rTC= post('tc');
    $rName = post('name');
    $rsName = post('sName');
    $rPhone = post('Phone');
    $rMail = post('Mail');
    $rCity = post('city');
    $rAddress = post('address');
    $rText = post('text');
    if (!$rTC || !$rName || !$rsName || !$rPhone || !$rMail || !$rCity || !$rAddress || !$rText  ) {
          $error = "Lütfen Boş Alan Bırakmayınız.";

    }else{                 
        $RequestAdd = array(
                      'requestName' => $rName,
                      'requestSurname' => $rsName,
                      'requestMail' => $rMail,
                      'requestPhone' => $rPhone,
                      'requestComment' => $rText,
                      'requestTC' => $rTC,
                      'cityID' => $rCity,
                      'requestAddress' => $rAddress,
                      'societyID' => 0
                    );
        if(!empty($_FILES['file'])){
        $file = resSize($_FILES['file'],"assets/img/request/",4194304,permalink($RequestAdd['requestName'])."-".permalink($RequestAdd['requestSurname'])."-".rand(100,900));
        if ($file=="HATA") {
              $error = "Bir Hata Oluştu";
              header('Refresh:2;');
            }else{
               $RequestAdd= array_merge($RequestAdd,array(
                 'requestDocument' => $file
          ));
         }
        }

        $RequestData = $db->insert('request')
                ->set($RequestAdd);

            if ($RequestData) {
              $success = "Talep Başarılı Bir Şekilde Oluşturulmuştur";
                header('Refresh:2;');
            }else {
              $error = "Talep Oluşturulurken Bir Hata Oluştu";
           
            }

        }
  }

require view('talep');
?>
