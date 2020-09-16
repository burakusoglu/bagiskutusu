<?php

// İlk oturum şifresi ve Tuzlama İçin
function randomPassword($length = 15,$type="full") {
  if($type=="int"){
    $characters = '0123456789';
  }else if($type=="full"){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-*/{}[]()?.-_%';
  }else if($type=="link"){
    //şifre değiştirme linki için
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  }
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}
/* Şifre Gereksinimleri */
function passControl($password){
	$kontrol = "/\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*/"; // Regex
	// En az 8 karakter , büyük harf , küçük harf ,Sayı
	if(preg_match($kontrol,$password)){ 	
     return true;
	}else{
	  return false;
	}
}
/* Google ReCaptcha Function */
function reCaptcha($response,$secret){
  $remoteip=$_SERVER['REMOTE_ADDR'];
  $captcha=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
  $result=json_decode($captcha);
  $data = false;
         if($result->success==1){
           $data = true;
         }else{
           $data = false;
         }
         return $data;
 }

// Token Oluşturma
function _token($word="",$time = true){
  date_default_timezone_set('Europe/Istanbul');
  if($time==false){
    return md5(md5(md5(md5("atilim".$word))));
  }else{
    return md5(md5(md5(md5(date('d.m.Y.H').$word))));
  }
  
}
//Admin şifre iişlemleri
// Hash function 
// Exp. _pass("flatron2","destek.bagiskutusu@gmail.com","verify",$db);
function _pass($pass,$email,$passType="pass",$db)
{
  if($email){
    $passMailControl = $db->select('society')
    ->where('societyMail',$email)
    ->run(true);
    if($passMailControl){
      $saltControl = $db->select('saltsociety')
      ->where('societyID',$passMailControl['societyID'])
      ->run(true);
      if($saltControl){
         $hash = $saltControl['saltSociety'].$pass."atilimuni";
        if($passType == "verify"){
          /*Password_verify php kendi fonksiyonudur */
          return password_verify($hash,$passMailControl['societyPass']);
        }else if($passType=="pass"){
          return password_hash($hash,PASSWORD_DEFAULT);
        }
      }
    }
  }
}
//Kullanıcı şifre işlemleri
function _passUser($pass,$email,$passType="pass",$db)
{
  if($email){
    $passMailControl = $db->select('user')
    ->where('userMail',$email)
    ->run(true);
    if($passMailControl){
      $saltControl = $db->select('salt')
      ->where('userID',$passMailControl['userID'])
      ->run(true);
      if($saltControl){
         $hash = $saltControl['salt'].$pass."atilimuni";
        if($passType == "verify"){
          /*Password_verify php kendi fonksiyonudur */
          return password_verify($hash,$passMailControl['userPass']);
        }else if($passType=="pass"){
          return password_hash($hash,PASSWORD_DEFAULT);
        }
      }
    }
  }
}




// Mail Gönderme 
// function mailSend($subject,$content,$addMail,$addFullName){
//   $mail = new PHPMailer();
//   $mail->IsSMTP();
//   $mail->SMTPAuth = true;
//   $mail->Host = 'smtp.gmail.com';
//   $mail->Port = 587;
//   $mail->SMTPSecure = 'tls';
//   $mail->Username = 'destek.bagiskutusu@gmail.com';
//   $mail->Password = 'atilim06.';
//   $mail->SetFrom($mail->Username, 'Bağış Kutusu Yönetim');
//   $mail->AddAddress($addMail, $addFullName);
//   $mail->CharSet = 'UTF-8';
//   $mail->Subject = $subject;
//   $mail->MsgHTML($content);

//   if($mail->Send()) {
//     $error = true;
//   } else {
//     $error = false;
//   }
//   return $error;
// }
//TCkimlik no konrol
function tcControl($data)
{
  $post_data = '<?xml version="1.0" encoding="utf-8"?>
  <soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
    <soap:Body>
      <TCKimlikNoDogrula xmlns="http://tckimlik.nvi.gov.tr/WS">
        <TCKimlikNo>'.$data['tcno'].'</TCKimlikNo>
        <Ad>'.$data['isim'].'</Ad>
        <Soyad>'.$data['soyisim'].'</Soyad>
        <DogumYili>'.$data['dogumyili'].'</DogumYili>
      </TCKimlikNoDogrula>
    </soap:Body>
  </soap:Envelope>';
  $ch = curl_init();
  // CURL options
  $options = array(
    CURLOPT_URL				=> 'https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx',
    CURLOPT_POST			=> true,
    CURLOPT_POSTFIELDS		=> $post_data,
    CURLOPT_RETURNTRANSFER	=> true,
    CURLOPT_SSL_VERIFYPEER	=> false,
    CURLOPT_HEADER			=> false,
    CURLOPT_HTTPHEADER		=> array(
        'POST /Service/KPSPublic.asmx HTTP/1.1',
        'Host: tckimlik.nvi.gov.tr',
        'Content-Type: text/xml; charset=utf-8',
        'SOAPAction: "http://tckimlik.nvi.gov.tr/WS/TCKimlikNoDogrula"',
        'Content-Length: '.strlen($post_data)
    ),
  );
  curl_setopt_array($ch, $options);
  $response = curl_exec($ch);
  curl_close($ch);
  return (strip_tags($response) === 'true') ? true : false;
}
function strtoupper_tr($data) {  
  $k=array('ı','i','ş','ö','ğ','ç','ü');  
  $b=array('I','İ','Ş','Ö','Ğ','Ç','Ü');  
  $data=str_replace($k,$b,$data);  
  $data = strtoupper($data);  
  return $data;  
}
function ext($file)
{
    $ext = pathinfo($file);
    return $ext['extension'];
} 

$sLogo = resSize($_FILES['sLogo'],"assets/img/society/",4194304);
// Resim Yükleme ve Dosya Boyut Düşürme 
function resSize($fileName, $path,$fileSize,$imageName = "rand"){
  set_time_limit(0); // işlem uzun sürse bile kapatma
  ini_set('memory_limit', '-1'); //php tarafından liit varsa limit kaldırıyor
  

  $_dosya_adi = $fileName['name'];
  if(!$_dosya_adi){
    $error = "Resim Değeri Boş";
  }else {
    $boyut = $fileSize;
    $max = ($boyut/1024)/1024;
    //uzanti png veya jpeg gib idönüdürür uzantıyı
    $uzanti = substr($_dosya_adi,(strlen(ext($_dosya_adi))+1)-((strlen(ext($_dosya_adi))+1)*2),strlen(ext($_dosya_adi))+1);
    if($imageName=="rand"){
      $res_adi = rand(0,99999999)."_".rand(0,99999999)."_".rand(0,99999999).$uzanti; //584855848541-518545518-51884.jpg
    }else{
      $res_adi = $imageName.$uzanti; // vakifadi.png
    }
    $res_adres = $path.$res_adi; // resmin yüklenceği adres 
    
    if ($fileName['size'] > $boyut) {
      $error = "Dosya Boyutu En Fazla".$max."MB Olabilir";
    }else {
      if($fileName['type'] == "image/jpeg" || $fileName['type'] == "image/png"){
        if(is_uploaded_file($fileName['tmp_name'])){ // önbelleğe yüklüyoruz
          if ( $fileName['type'] == "image/png") {
              $resimimm=imagecreatefrompng($fileName['tmp_name']);
              $boyutlar=getimagesize($fileName['tmp_name']);
              $yeniresim=imagecreatetruecolor($boyutlar[0],$boyutlar[1]);
              imagealphablending($yeniresim,true);
              $transparent = imagecolorallocatealpha($yeniresim, 255, 255, 255, 127);
              imagefilledrectangle($yeniresim,0,0,$boyutlar[0],$boyutlar[1],$transparent);
              imagealphablending($yeniresim,true);
              imagefill($yeniresim, 0, 0, $transparent);
              imagecopyresampled($yeniresim, $resimimm, 0, 0, 0, 0, $boyutlar[0], $boyutlar[1], $boyutlar[0], $boyutlar[1]);
              imagealphablending($yeniresim,true);
              imagealphablending($yeniresim,false);
              imagesavealpha($yeniresim,true);
              imagepng($yeniresim,$fileName['tmp_name'],9);
            }else if($fileName['type'] == "image/jpeg") {
              $resimimm=imagecreatefromjpeg($fileName['tmp_name']);
              $boyutlar=getimagesize($fileName['tmp_name']);
              $yeniresim=imagecreatetruecolor($boyutlar[0],$boyutlar[1]);
              imagecopyresampled($yeniresim, $resimimm, 0, 0, 0, 0, $boyutlar[0], $boyutlar[1], $boyutlar[0], $boyutlar[1]);
              imagejpeg($yeniresim,$fileName['tmp_name'],75);
            }
           
              $tasi = move_uploaded_file($fileName["tmp_name"],$res_adres);
              if(!$tasi){
              $error = "Resim Dizin Taşıması Yapılamıyor.";
              }
            
             
        }else{
            $error = "Resim Yükleme İşlemi Yapılamıyor.";
        }
      }else {
          $error = "Resim Formatı Sadece PNG,JPEG Olabilir.";
      }
    }
  }
  if (isset($error)) {
    return "HATA";
  }else {
          return $res_adi;
  }
}
function curl($url, $post=false)
{
    $user_agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, $post ? true : false);
    curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
    $icerik = curl_exec($ch);
    curl_close($ch);
    return $icerik;
}
// required curl
function user_info()  
{  
   $data = curl("https://ipapi.co/json");
   $dataArray = json_decode($data,true);
   $user_agent = array("user_agent" => $_SERVER['HTTP_USER_AGENT']);
   
   if (!empty($_SERVER['HTTP_CLIENT_IP']))  
		{  
			$ip	= $_SERVER['HTTP_CLIENT_IP'];  
		}  
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){  
			$ip	= $_SERVER['HTTP_X_FORWARDED_FOR'];  
		}  
		else{  
			$ip	= $_SERVER['REMOTE_ADDR'];  
    }  
    $ip_system = array("ip_remote" => $ip);

   $data = array_merge($dataArray,$user_agent,$ip_system);
   return $data;
}


// Uyarı Mesajları 
function success($success){
  return '<span class="alert alert-success btn-block">'. $success .'</span>';
}

function warning($warning){
  return '<span class="alert alert-warning btn-block">'. $warning .'</span>';
}
function danger($danger){
  return '<span class="alert alert-danger btn-block">'. $danger .'</span>';
}
function info($info){
  return '<span class="alert alert-info btn-block">'. $info .'</span>';
}

 ?>
