<?php
    if(!session("userLogin")){
        Header("Refresh:0; url=".site_url());
        die();
    }

 if(post("cikis")){
    session_destroy();
    header("Refresh:0");
  } 

  $userInfo = $db->select('user')
  ->where('userID',session("user_id"))
  ->run(true);

  $favoriteInfo = $db->select('favorite')
  ->join('donatelist', '%s.donateListID = %s.donateListID')
  ->where('userID',session("user_id"))
  ->run();


require view('kullanicisayfasi');
?>
