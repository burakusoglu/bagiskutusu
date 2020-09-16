<?php
//Like
       if (post('type')) {

        $fav = post('donateList');

        $favCheck = $db->select('donatelist')
        				->where('donatelistID',$fav)
        				->run(true);
       
                if($favCheck){
                
                  $favControl = $db->select('favorite')
                  ->where('userID',session('user_id'))
                  ->where('donatelistID',$fav)
                  ->run(true);
  
  
                  if($favControl){
                    $delete = $db->delete('favorite')
                    ->where('favoriteID',$favControl['favoriteID'])
                    ->done();
  
                    if ($delete) {
                      $Message = "nofav";
                    }
  
                  }else{
                    $sorgu = $db->insert('favorite')
                    ->set(array(
                      'donateListID' => $fav, 
                      'userID' => session('user_id')
                    ));
                    if ($sorgu) {
                      $Message = "fav";
                    }
                  }
                  }
                      echo json_encode($Message);
            }


?>            