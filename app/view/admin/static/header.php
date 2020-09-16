<!DOCTYPE html>
<html lang="tr" translate="no">

<head>
<link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">
  <title>Bagış Kutusu Yönetim Paneli</title>
  <link href="<?php echo admin_asset_url('vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo admin_asset_url('vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo admin_asset_url('vendor/datatables/dataTables.bootstrap4.css'); ?>" rel="stylesheet">
  <link href="<?php echo admin_asset_url('css/sb-admin.css'); ?>" rel="stylesheet">
  <link href="<?php echo admin_asset_url('css/bootstrap-tagsinput.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="<?php echo admin_asset_url('ckeditor/ckeditor.js'); ?>" charset="utf-8"></script>
  <link rel="stylesheet" href="<?php echo admin_asset_url('css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo admin_asset_url('css/dropzone.css'); ?>">
  <script src="<?php echo admin_asset_url('vendor/jquery/jquery.min.js'); ?>"></script>

  <script>
         $(document).ready(function() {
             $(".tab-menu a").click(function(event) {
                 event.preventDefault();
                 $(this).parent().addClass("current");
                 $(this).parent().siblings().removeClass("current");
                 var tab = $(this).attr("href");
                 $(".tab-content").not(tab).css("display", "none");
                 $(tab).fadeIn();
             });
         });
     </script>
     <style media="screen">
     body {
margin:0;
padding:0
}
.container {
margin:0 auto;
margin-top:50px
}
.tab-menu {
display:block;
margin:0;
padding:0;
text-align:left
}
.tab-menu li {
list-style:none;
display:inline-block;
margin:0 10px 10px 0
}
.tab-menu li a {
display:block;
color:#666;
padding:15px;
font-size:14px;
font-family: Arial;
text-decoration:none;
border:1px solid #ddd
}

.tab-content {

}
#tab1 {
display:block
}

.tab-container {
border:1px solid #ddd;
padding:30px;
font-family: Arial;
font-size:14px;
color:#666
}
.current a {
background:#666 !important;
border:1px solid #666 !important;
color:#fff !important
}
     </style>
</head>
<body class="fixed-nav sticky-footer bg-dark">


<?php if (session('login')): ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php admin_url(); ?>">Bağış Kutusu Yönetim Paneli <span class="adminHead">  | iletisim@bagiskutusu.org<span></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <?php foreach ($admin['menu'] as $key => $menu): ?>
        <li class="nav-item <?php echo (url(1) == $key ? 'active' : null) ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $menu['title']; ?>">
          <a class="nav-link" <?php if (isset($menu['submenu'])) {
            echo ' data-toggle="collapse" ';
          } ?>  href="<?php echo (isset($menu['submenu']) ?  '#'. $key : admin_url($key)) ?>">
            <i class="fa fa-fw fa <?php echo $menu['icon']; ?>"></i>
            <span class="nav-link-text"><?php echo $menu['title']; ?></span>
          </a>
          <?php if (isset($menu['submenu'])): ?>
            <ul class="sidenav-second-level collapse" id="<?php echo $key; ?>">
            <?php foreach ($menu['submenu'] as $subKey => $subMenu): ?>
              <li>
                <a href="<?php echo admin_url($subKey); ?>"><?php echo $subMenu['title']; ?></a>
              </li>
            <?php endforeach; ?>
            </ul>
          <?php endif; ?>
       
        </li>
   
      <?php endforeach; ?>
   
      </ul>

<ul class="navbar-nav sidenav-toggler">
  <li class="nav-item">
    <a class="nav-link text-center" id="sidenavToggler">
      <i class="fa fa-fw fa-angle-left"></i>
    </a>
  </li>
</ul>
<ul class="navbar-nav ml-auto">
  <li class="nav-item">
    <a class="nav-link" style="color:#FFF;"  data-toggle="modal" data-target="#exampleModal">
      <i class="fa fa-fw fa-sign-out"></i>Çıkış Yap</a>
  </li>
</ul>
</div>
</nav>
<?php endif; ?>
