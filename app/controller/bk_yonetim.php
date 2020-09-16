<?php

if (!url(1)) {
  $_url[1] = 'index';
}
if (!file_exists(controller('admin/' . url(1)))) {
  $_url[1] = 'index';
}
//veritabanından tabloya bağlantısı true osnucunda tek bir eleman gelsin diye true yazdık
$membership_info = $db->select('society')
            ->where('societyID',session('admin_id'))
            ->run(true);
if (!session('login')) {
  if($_url[1]!="reset_password"){
    if($_url[1]!="reset_password_email"){
      $_url[1] = 'login';
    }
  }
}else{
  if($membership_info['passControl'] == 0){
// giriş yaptığı zaman sistemin verdiği şifreyi değiştirmesi için hiçbir yere tıklanmıyor
    $_url[1] = "profile";
  } 
}



$settings = $db->select('setting')
          ->run(true);

//Hangi adminin rankına göre hangi sayfalara erişim sağlayacağı
if (session('admin_id')) {
  $kontrol = $db->select('society')
            ->where('societyID',session('admin_id'))
            ->run(true);
  if($kontrol['rank'] == 1){
    // admin
    $admin['menu'] = [
      'index' => [
        'title' => 'Anasayfa',
        'icon' => 'fa-home'
      ],
      'kjı' => [
        'title' => 'Kurumlar',
        'icon' => 'fa-users',
        'submenu' => [
          'admin_list' => [
            'title' => 'Kurum Listesi'
          ],
          'admin_add' => [
            'title' => 'Kurum Ekle'
          ]
        ]
      ],
      'message' => [
        'title' => 'Mesajlar',
        'icon' => 'fad fa-envelope'
      ],
      'sponsor' => [
        'title' => 'Sponsorlar',
        'icon' => 'fa-users',
        'submenu' => [
          'sponsor_list' => [
            'title' => 'Sponsorlar Listesi'
          ],
          'sponsor_add' => [
            'title' => 'Sponsor Ekle'
        ]
        ]
      ],
      'activity' => [
        'title' => 'Kategoriler',
        'icon' => 'fas fa-binoculars',
        'submenu' => [
          'category_list' => [
            'title' => 'Oluşturduğun Kategoriler'
          ],
          'category_add' => [
            'title' => 'Kategori Ekle'
          ]
        ]
      ],
      'settings' => [
      'title' => 'Ayarlar',
      'icon' => 'fa-cog'
    ]
    ];
  }else if($kontrol['rank'] ==0){
    // Kurum
    //Kurumsa belirtilen sayfaları görmesin
    $dizi = array("admin_add","admin_list","settings");
    foreach ($dizi as $link) {
      if ($_url[1] == $link) {
        $_url[1] = 'index';
      }
    }
    $admin['menu'] = [
      'index' => [
        'title' => 'Anasayfa',
        'icon' => 'fa-home'
      ],
        'requests' => [
        'title' => 'Talepler',
        'icon' => 'fas fa-bullhorn',
        'submenu' => [
          'show_requests' => [
            'title' => 'Aktif Talepleri Görüntüle'
          ],
          'take_on_request' => [
            'title' => 'Üzerine Aldığın Talepler'
          ]
        ]
      ],
      'donation' => [
        'title' => 'Bağış',
        'icon' => 'fas fa-credit-card',
        'submenu' => [
          'donation_add' => [
            'title' => 'Bağış Oluştur'
          ],
          'donation_list' => [
            'title' => 'Bağışların Hakkında'
          ]
        ]
      ],
      'activity' => [
        'title' => 'Etkinlikler',
        'icon' => 'fas fa-bell',
        'submenu' => [
          'activity_list' => [
            'title' => 'Düzenlediğin Etkinlikler'
          ],
          'activity_add' => [
            'title' => 'Etkinlik Ekle'
          ]
        ]
      ],
      'blog' => [
        'title' => 'Blog Yazıları',
        'icon' => 'fa-comments',
        'submenu' => [
          'blog_list' => [
            'title' => 'Yayınladığın Blog Yazıları'
          ],
          'blog_add' => [
            'title' => 'Blog Yazısı Ekle'
          ]
        ]
      ],
      'profile' => [
          'title' => 'Profil',
          'icon' => 'fa-user-circle'
        ]
    ];
  }
    
  }


require controller('admin/' . url(1));

 ?>
