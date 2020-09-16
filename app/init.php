<?php

session_start();
//sayfanın bellekte kalmasını sağlıyor, header vs.
ob_start();

//classlarımı yükleniyor
function customLoad($className){
  $classFile = __DIR__ . '/classes/class.' . strtolower($className) . '.php';
  if (file_exists($classFile)) {
    require $classFile;
  }
}
//Eklemeyi yapıyor classları
spl_autoload_register("customLoad");
//helper yükleniyor
Helper::Load();

require 'system/config.php';
//veri tabanı bağlantısı
$db = new basicdb($config['db']['host'],$config['db']['name'],$config['db']['user'],$config['db']['pass']);
$newMailSend = new kmail();
?>
