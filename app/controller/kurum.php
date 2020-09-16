<?php

if(empty(url(1))){
   header('Refresh:0; url='.site_url('index'));
}else{
    $societyInfo = $db->select('society')
                      ->where('societyLink',filterUrl(url(1)))
                      ->run(true);
    if(!$societyInfo){
        header('Refresh:0; url='.site_url('index'));
    } 

    $activityInfo = $db->select('activity')
    ->where("societyID",$societyInfo['societyID'])
    ->run();
    $donateInfo = $db->select('donatelist')
    ->where("societyID",$societyInfo['societyID'])
    ->run();
    $blogInfo = $db->select('blog')
    ->where("societID",$societyInfo['societyID'])
    ->run();
    


   
}

require view('kurum');
 ?>
