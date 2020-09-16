<?php
//Like
       if (post('type')) {
              $comment = post('com_id');

            
              $commentControl = $db->select('comment')
              ->where('commentID',$comment)
              ->run(true);
      
              if($commentControl){
                
                $likeControl = $db->select('likeblog')
                ->where('userID',session('user_id'))
                ->where('commentID',$comment)
                ->run(true);


                if($likeControl){
                  $delete = $db->delete('likeblog')
                  ->where('likeID',$likeControl['likeID'])
                  ->done();

                  if ($delete) {
                    $Message = "begenmedi";
                  }

                }else{
                  $sorgu = $db->insert('likeblog')
                  ->set(array(
                    'commentID' => $comment, 
                    'userID' => session('user_id')
                  ));
  
  
                  if ($sorgu) {
                    $Message = "begendi";
                  }
                }


               
      
              }
                    echo json_encode($Message);
            }


?>            