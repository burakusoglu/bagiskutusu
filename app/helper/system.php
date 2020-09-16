<?php
//controller klaslarını çağırma fonksiyonu
function controller($name){
  return controller . '/' . $name . '.php';
}
//View klaslarını çağırma fonksiyonu
function view($name){
  return view . '/' . $name . '.php';
}

 ?>
