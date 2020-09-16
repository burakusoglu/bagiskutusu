<?php


if (post('sponsor_add')) {
    $sponsorName = post('name');
    $sponsorTel = post('tel');
    $sponsorLink = post('link');
    $bTag = post('tag');            
          $sorgu = array(
                        'name' => $sponsorName,
                        'sponsorLink' => $sponsorLink,
                        'phone' => $sponsorTel
                      );
          if(!empty($_FILES['sImg'])){
          $sImg = resSize($_FILES['sImg'],"assets/img/sponsor/",4194304,permalink($sorgu['phone'])."-".$membership_info['societyName']."-".rand(100,900));
          if ($sImg=="HATA") {
                $error = "Bir Hata Oluştu";
                // header('Refresh:2;');
              }else{
                 $sorgu= array_merge($sorgu,array(
                   'image' => $sImg
            ));
           }
          }

          $sorgu2 = $db->insert('sponsor')
          ->set($sorgu);

              if ($sorgu2) {
                $succes = "Sponsor Ekleme Başarılı";
                  // header('Refresh:1;');
              }else {
                $error = "Sponsor Ekleme Başarısız";
                header('Refresh:1;');
              }
  }


require view('admin/sponsor_add');
 ?>
