<?php
$id = url(2);
if (!is_numeric($id)) {
  $error = "Böyle Bir Değer Olamaz";
}else {
  $vkontrol = $db->select('gallery')
                ->where('gallery_id',$id)
                ->run(true);

                if (!$vkontrol) {
                      $error = "Böyle Bir Albüm Yok";
                } else {
                  @$res = resSize("file","assets/img/",4194304);
                  if($res == "HATA"){
                      $error = "Bir Hata Oluştu";
                  }else{
                        $sorgu = $db->insert('photo')
                                  ->set(array(
                                    'photo_link' => $res,
                                    'gallery_id'=> $id
                                  ));
                 }
                }
}





// $id = url(2);
// if (!is_numeric($id)) {
//   $error = "Böyle Bir Değer Olamaz";
// }else {
//   $vkontrol = $db->select('gallery')
//                 ->where('gallery_id',$id)
//                 ->run(true);
//         if (!$vkontrol) {
//           $error = "Böyle Bir Albüm Yok";
//         }else {
//           if (post('images_add')) {
//                 $res = resSize("res","assets/img/",4194304);
                
//                 if($res == "HATA"){
//                     $error = "Bir Hata Oluştu";
//                 }else{
//                      $sorgu = $db->insert('photo')
//                                 ->set(array(
//                                   'post_image' => $res,
//                                   'post_content'=> $id,
//                                   'post_category' => 0
//                                 ));
//                       if ($sorgu) {
//                         $succes = "Resim Ekleme Başarılı";
//                         header("Refresh: 2;");
//                       }else {
//                         $error = "Resim Ekleme Başarısız";
//                         header("Refresh: 2;");
//                       }
//                 }
                   
               
//             }

//             }
//       }



require view('admin/image_add'); ?>
