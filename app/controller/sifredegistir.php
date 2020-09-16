<?php
    if(!session("userLogin")){
        Header("Refresh:0; url=".site_url());
        die();
    }

 if(post("cikis")){
    session_destroy();
    header("Refresh:0");
  }


require view('sifredegistir');
?>
