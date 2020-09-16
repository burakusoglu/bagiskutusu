<?php
$id = url(2);
if (!is_numeric($id)) {
  $error = "Böyle Bir Değer Olamaz";
}else {
  $blogValue = $db->select('blog')
            ->where('blogID',$id)
            ->where('societID',session('admin_id'))
            ->run(true);
            
  if(!$blogValue){
    header("Refresh:0; url=".admin_url('blog_list'));
    die();
  }

      if (post('blog_update')) {
        $title = post('postName');
        $text = post('content');
        $tag = post('postTag');
        if (!$title || !$text ) {
          $error = "Başlık ve açıklama alanlarını boş bırakmayınız.";
        }else {
          $guncelle = array(
            'tag' => $tag,
            'text' => $text,
            'title' => $title,
            'blogLink' => $membership_info['societyLink']."-".permalink($title)."-".rand(100,900)
        );
        if(!empty($_FILES['bLogo'])){
          $bLogo = resSize($_FILES['bLogo'],"assets/img/blog/",4194304,permalink($title)."-".$membership_info['societyLink']."-".rand(200,900));
          if ($bLogo=="HATA") {
          }else{
              $guncelle = array_merge($guncelle,array(
                  'b_image' => $bLogo
              ));
          }
      }
      
      $societInfoUpdate = $db->update('blog')
      ->where('blogID',$id)
      ->set($guncelle);

      if ($societInfoUpdate) {
          $success = "Bilgiler başarılı bir şekilde güncellendi.";
          header('Refresh:2;');
        }else {
          $error = "Güncelleme başarısız";
        }
           
        }
      }
    }    
      
require view('admin/blog_edit'); ?>



   