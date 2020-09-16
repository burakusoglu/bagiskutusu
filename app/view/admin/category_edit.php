<?php require view('admin/static/header'); ?>
<div class="content-wrapper">

    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo admin_url("category_list"); ?>">Kategoriler</a>
        </li>
        <li class="breadcrumb-item active">Kategori Düzenle</li>
      </ol>
      <div class="row">
          <div class="col-12 text-align">
          <div class="row text-center">
       <div class="col-md-12">
         <?php
         if (isset($error)) {
           echo danger($error);
         }
         if (isset($success)) {
           echo success($success);
         }
         ?>

       </div>
     </div>
            <div class="card mb-3">
                    <div class="card-header">
                      <i class="fa fa-binoculars"></i> Kategori Bilgileri</div>
                    <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <div class="col-md-6">
                    <label for="exampleInputName">Kategori Adı:</label>
                    <input class="form-control" name="catName" type="text" aria-describedby="nameHelp" value="<?php echo $catValue['categoryName'];  ?>">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                    <label for="exampleInputName">Kategori Açıklaması:</label>
                    <input class="form-control" name="catDes" type="text" aria-describedby="nameHelp" value="<?php echo $catValue['categoryDescription'];  ?>">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                    <label for="exampleInputName">Kategori Numarası:</label>
                    <input class="form-control" name="catNo" id="exampleInputName" type="number" min="0" max="4" aria-describedby="nameHelp"  value="<?php echo $catValue['categoryType'];  ?>">
              </div>
            </div>
            <div class="form-group">
          <div class="uyariOrtala" style="display:block; justify-content:center;">
                      <div class="col-md-6" style="font-size:11px;">
                      <?php                     
                        echo info("1: Kurum Maddi Bağış <br> 2:Eşya Bağışı <br> 3: Kişi Bazlı Maddi Yardım <br> 4: Maddi Ve Eşya Yardımı ");
                      ?>
                      </div>
        </div></div>
          <div class="form-group">
            <div class="col-md-6">
              <button class="btn btn-primary btn-block" type="submit" name="activity_update" value="1">Güncelle</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>

<?php require view('admin/static/footer'); ?>
