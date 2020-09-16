<?php

if(empty(url(1))){
   header('Refresh:0; url='.site_url('index'));
}else{
    $blogInfo = $db->select('blog')
                      ->where('blogLink',filterUrl(url(1)))
                      ->run(true);
    if(!$blogInfo){
        header('Refresh:0; url='.site_url('index'));
    } 


    // if (post('comment_add')) {
    //     $comment = post('comment');

    //           $commentAdd = $db->insert('comment')
    //                       ->set(array(
    //                         'userID' => session('user_id'),
    //                         'blogID' => $blogInfo['blogID'],
    //                         'comment' => $comment,
    //                         'commentIp' =>  $_SERVER['REMOTE_ADDR']
    //                       ));
    //             if ($commentAdd) {
    //                 header('Refresh:0;');
    //             }else {
    //               header('Refresh:0;');
    //             }
              
    //   }

      $commentList = $db->select('comment')
                ->join('user', '%s.userID = %s.userID')
                ->where('blogID',$blogInfo['blogID'])
                ->run();

}


require view('blog');
?>
