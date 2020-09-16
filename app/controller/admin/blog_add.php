<?php
$sorgu = $db->select('blog')
->run(true);


// Blog Ekle
if (post('blog_add')) {
    $bName = post('postName');
    $bContent = post('content');
    $bTag = post('tag');
    if (!$bName || !$bContent || !$bTag ) {
          $error = "Lütfen Boş Alan Bırakmayınız.";
          header('Refresh:2;');
    }else{                 
          $sorgu = array(
                        'societID' => session('admin_id'),
                        'tag' => $bTag,
                        'text' => $bContent,
                        'title' => $bName,
                        'blogLink' => $membership_info['societyLink']."-".permalink($bName)."-".rand(100,900)
                      );
          if(!empty($_FILES['bImg'])){
          $bImg = resSize($_FILES['bImg'],"assets/img/blog/",4194304,permalink($sorgu['title'])."-".$membership_info['societyLink']."-".rand(100,900));
          if ($bImg=="HATA") {
                $error = "Bir Hata Oluştu";
                header('Refresh:2;');
              }else{
                 $sorgu= array_merge($sorgu,array(
                   'b_image' => $bImg
            ));
           }
          }

          $sorgu2 = $db->insert('blog')
          ->set($sorgu);

              if ($sorgu2) {
                $succes = "Blog Ekleme Başarılı";
                  header('Refresh:1;');
              }else {
                $error = "Blog Ekleme Başarısız";
                header('Refresh:1;');
              }

          }
  }
// Blog Ekle Bitiş

require view('admin/blog_add');
 ?>
