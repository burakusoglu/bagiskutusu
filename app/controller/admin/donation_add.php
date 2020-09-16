<?php

$category1 = $db->select('category') 
          ->where("categoryType",1)
          ->run();

$category2 = $db->select('category') 
          ->where("categoryType",2)
          ->run();

$category3 = $db->select('category') 
          ->where("categoryType",3)
          ->run();

$category4 = $db->select('category') 
          ->where("categoryType",4)
          ->run();


// Maddi Kurum Bağış Ekleme Başla
if (post('dernek')) {
    $kbTitle = post('kbTitle');
    $sec = post('category');
    $kbContent = post('kbContent');
    $kbAmount = post('kbAmount');
    if (!$kbTitle || !$kbContent || !$kbAmount  ) {
      $error = "Lütfen Boş Alan Bırakmayınız.";
      header("Refresh:2; url=".admin_url('donation_add/5'));
    }else{

  $sorgu = array(
    'societyID' => session('admin_id'),
    'categoryID' => $sec,
    'donateName' => $kbTitle,
    'donateAmount' => $kbAmount,
    'donateListVisible' => 1,
    'donateDescription' => $kbContent,
    'donateLink' => $membership_info['societyLink']."-".permalink($kbTitle)."-".rand(100,900)
  );


  if(!empty($_FILES['kbImg'])){
    $kbImg = resSize($_FILES['kbImg'],"assets/img/donation/",4194304,permalink($sorgu['donateName'])."-".$membership_info['societyLink']."-".rand(100,900));
    if ($kbImg=="HATA") {
          $error = "Bir Hata Oluştu";
          header('Refresh:2;');
        }else{
           $sorgu= array_merge($sorgu,array(
             'donateImage' => $kbImg
      ));
     }
    }
      $sorgu2 = $db->insert('donatelist')
             ->set($sorgu);
        
        if ($sorgu2) {
          $success = "Bağış Başarılı Bir Şekilde Oluşturulmuştur";
          header("Refresh:2; url=".admin_url('donation_add/5'));
           
        }else {
          $error = "Bağış Oluşturma Başarısızdır";
          header('Refresh:5;');
        }
       }
  
}

// Maddi Kurum Bağış Ekleme Bitiş

//Kişi Bazlı Maddi Yardım Başlama
if (post('para')) {
  
  $postName = post('dName');
  $postSname = post('dSname');
  $postTC = post('dTC');
  $postDate = post('dDate');
  $postPhone= post('dPhone');
  $postAddress = post('dAddress');
  $postTitle = post('dTitle');
  $postContent = post('dContent');
  $postAmount = post('dAmount');
  $dContent = post('dContent');
  $postCategory = post('category');

  

  if (!$postName || !$postSname || !$postTC  || !$postPhone || !$postDate || !$postAddress || !$postTitle || !$postContent || !$postAmount  ) {
    $error = "Lütfen Boş Alan Bırakmayınız.";
  }else{
    $tcData = array(
      'tcno'			=> $postTC,	
      'isim'			=> strtoupper_tr($postName), 		
      'soyisim'		=> strtoupper_tr($postSname), 		
      'dogumyili'		=> $postDate
     );
    if(tcControl($tcData)){
      $neederAdd = $db->insert('needer')
                      ->set(array(
                        'neederName' => $postName,
                        'neederSurname' => $postSname,
                        'neederTC' => $postTC,
                        'neederPhone' => $postPhone,
                        'neederAddress' => $postAddress,
                        'neederDate' => $postDate
                      ));
            if ($neederAdd) {
              $res = resSize($_FILES['res'],"assets/img/donation/",4194304,permalink(rand(100,200)."-".$membership_info['societyLink']."-".rand(100,900)));

                  if ($res=="HATA") {
                    $error = "Bir Hata Oluştu";
                  }else{
                        
                  $donateAdd = $db->insert('donatelist')
                              ->set(array(
                                'categoryID' => $postCategory,
                                'societyID' => session("admin_id"),
                                'donateImage' => $res,
                                'donateName' => $postTitle,
                                'donateAmount' => $postAmount,
                                'donateListVisible' => 1,
                                'donateDescription' => $dContent,
                                'donateLink' => $membership_info['societyLink']."-".permalink($postName)."-".rand(100,900)
                              ));
                        if ($donateAdd) {
                          $success = "Bağış Başarılı Bir Şekilde Oluşturulmuştur";
                            header('Refresh:2; url='.admin_url('donation_add/1'));
                        }else {
                          $error = "Bağış Oluşturma Başarısızdır";
                          header('Refresh:2; url='.admin_url('donation_add/1'));
                        }
                        }
            }
    }else{
      $error = "Girmiş olduğunuz TC bilgisine Ait Vatandaş Bulunamamıştır!";
    }


  }
}
//Kişi Bazlı Maddi Yardım Bitiş 

//Eşya Bağışı Başlama

if (post('urun')) {
  $uName = post('uName');
  $sec = post('category');
  $uContent = post('uContent');
  if (!$uName || !$uContent || !$sec  ) {
    $error = "Lütfen Boş Alan Bırakmayınız.";
    header("Refresh:2; url=".admin_url('donation_add/5'));
  }else{

$sorgu = array(
  'societyID' => session('admin_id'),
  'categoryID' => $sec,
  'donateName' => $uName,
  'donateListVisible' => 1,
  'donateDescription' => $uContent,
  'donateLink' => $membership_info['societyLink']."-".permalink($uName)."-".rand(100,900)
);


if(!empty($_FILES['uImg'])){
  $uImg = resSize($_FILES['uImg'],"assets/img/donation/",4194304,permalink($sorgu['donateName'])."-".$membership_info['societyLink']."-".rand(100,900));
  if ($uImg=="HATA") {
        $error = "Bir Hata Oluştu";
        header('Refresh:2;');
      }else{
         $sorgu= array_merge($sorgu,array(
           'donateImage' => $uImg
    ));
   }
  }
    $sorgu2 = $db->insert('donatelist')
           ->set($sorgu);
      
      if ($sorgu2) {
        $success = "Bağış Başarılı Bir Şekilde Oluşturulmuştur";
        header("Refresh:2; url=".admin_url('donation_add/3'));
         
      }else {
        $error = "Bağış Oluşturma Başarısızdır";
        header('Refresh:5;');
      }
     }

}

//Eşya Bağışı Bitiş


//Eşya+ Maddi Yardım Başlama
if (post('pe')) {
  
  $postName = post('iName');
  $postiuName = post('iuName');
  $postSname = post('iSname');
  $postTC = post('iTC');
  $postDate = post('iDate');
  $postPhone= post('iPhone');
  $postAddress = post('iAddress');
  $postContent = post('iContent');
  $postAmount = post('iAmount');
  $dContent = post('iContent');
  $postCategory = post('category');

  

  if (!$postName || !$postCategory || !$postSname || !$postTC  || !$postPhone || !$postDate || !$postAddress || !$postiuName || !$postContent || !$postAmount  ) {
    $error = "Lütfen Boş Alan Bırakmayınız.";
  }else{
    $tcData = array(
      'tcno'			=> $postTC,	
      'isim'			=> strtoupper_tr($postName), 		
      'soyisim'		=> strtoupper_tr($postSname), 		
      'dogumyili'		=> $postDate
     );
    if(tcControl($tcData)){
      $neederAdd = $db->insert('needer')
                      ->set(array(
                        'neederName' => $postName,
                        'neederSurname' => $postSname,
                        'neederTC' => $postTC,
                        'neederPhone' => $postPhone,
                        'neederAddress' => $postAddress,
                        'neederDate' => $postDate
                      ));
            if ($neederAdd) {
              $ires = resSize($_FILES['ires'],"assets/img/donation/",4194304,permalink(rand(100,200)."-".$membership_info['societyLink']."-".rand(100,900)));

                  if ($ires=="HATA") {
                    $error = "Bir Hata Oluştu";
                  }else{
                        
                  $donateAdd = $db->insert('donatelist')
                              ->set(array(
                                'categoryID' => $postCategory,
                                'societyID' => session("admin_id"),
                                'donateImage' => $ires,
                                'donateName' => $postiuName,
                                'donateAmount' => $postAmount,
                                'donateListVisible' => 1,
                                'donateDescription' => $dContent,
                                'donateLink' => $membership_info['societyLink']."-".permalink($postName)."-".rand(100,900)
                              ));
                        if ($donateAdd) {
                          $success = "Bağış Başarılı Bir Şekilde Oluşturulmuştur";
                            header('Refresh:2; url='.admin_url('donation_add/4'));
                        }else {
                          $error = "Bağış Oluşturma Başarısızdır";
                          header('Refresh:2; url='.admin_url('donation_add/4'));
                        }
                        }
            }
    }else{
      $error = "Girmiş olduğunuz TC bilgisine Ait Vatandaş Bulunamamıştır!";
    }


  }
}
//Eşya+ Maddi Yardım Bitiş 


require view('admin/donation_add');
 ?>
