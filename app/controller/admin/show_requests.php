<?php
$request = $db->select('request')
            ->join('city', '%s.cityID = %s.cityID')
            ->where("societyID",0)
            ->run();
          
if (post('addRequest')) {
  $requestValue = post('addRequest');
// arayüzden gelen token ile sistem aynı tokeni oluşturup karşılaştırılıyor
  $requestID = substr($requestValue,0,strlen($requestValue)-32);
  $requestToken = substr($requestValue,strlen($requestValue)-32,strlen($requestValue));

  if($requestToken == _token($requestID,false)){
    $requestUpdate = $db->update('request')
    ->where('requestID',$requestID)
    ->set(array(
      'societyID'=>session('admin_id')
    ));
    if($requestUpdate){
      $success = "Talep başarılı bir şekilde üzerinize alındı";
      header("Refresh:2");
    }else{
      $error = "Talep üzerinize alınırken bir hata oluştu";
    }
  }else{
    $error = "Token Error";
  }



}



 require view('admin/show_requests');
 ?>
