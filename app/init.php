<?php

session_start();
ob_start();

function customLoad($className){
  $classFile = __DIR__ . '/classes/class.' . strtolower($className) . '.php';
  if (file_exists($classFile)) {
    require $classFile;
  }
}

spl_autoload_register("customLoad");

Helper::Load();

require 'system/config.php';
//veri tabanı bağlantısı
$db = new basicdb($config['db']['host'],$config['db']['name'],$config['db']['user'],$config['db']['pass']);
$newMailSend = new kmail();
?>

