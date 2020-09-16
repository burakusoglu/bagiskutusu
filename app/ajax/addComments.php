<?php
      
    if (post('type')) {
         $comment = post('comment');
         $blog_id = post('blog_id');
        
            $commentAdd = $db->insert('comment')
                        ->set(array(
                          'userID' => session('user_id'),
                          'blogID' => $blog_id,
                          'comment' => $comment,
                          'commentIp' =>  $_SERVER['REMOTE_ADDR']
                        ));
              if ($commentAdd) {
                $Message = "ok";
              }
            
 echo json_encode($Message);
               
}

?>