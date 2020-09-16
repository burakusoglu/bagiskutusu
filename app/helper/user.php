<?php
//Kullanıcının oturum verisini session($name) diye kolayca erişim sağlıyaibliyoruz
function session($name, $value = null){
  if ($value) {
    $_SESSION[$name] = $value;
  }
  if (isset($_SESSION[$name])) {
    return $_SESSION[$name];
  }
}


 ?>
