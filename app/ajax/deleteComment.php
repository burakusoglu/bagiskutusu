
<?php
if (post('type')) {
              $sil = post('delete');
                $sorgu= $db->delete('comment')
                          ->where('commentID',$sil)
                          ->done();
                if ($sorgu) {
                    $Message = "ok";
                }    
 echo json_encode($Message);
               
}


?>