<?php
//config dosyasını array şeklinde çağırıyoruz
$config = array();
//veritabanı bilgilerimiz yazıyoruz
$config['db'] = [
  'host' => 'localhost',
  'name' => 'b_kutusu',
  'user' => 'root',
  'pass' => '' 
];

define('dir',realpath('.'));
define('controller', dir . '/app/controller');
define('view', dir . '/app/view');
//local olduğunda aşağıdaki gibi
define('url','http://' . $_SERVER['SERVER_NAME'].'/bagiskut');
// define('url','https://' . $_SERVER['SERVER_NAME']);



?>
