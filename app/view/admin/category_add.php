<?php require view('admin/static/header'); ?>



<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="<?php echo admin_url('index'); ?>">Anasayfa</a>
        </li>
        <li class="breadcrumb-item active">Kategori Ekle</li>
      </ol>
      <div class="row">
        <div class="col-12 text-align">

          <form action="" method="post">
            <div class="form-group">
              <div class="col-md-6">
                    <label for="exampleInputName">Kategori Adı:</label>
                    <input class="form-control" name="catName" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Kategori Adını Giriniz">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                    <label for="exampleInputName">Kategori Açıklaması:</label>
                    <input class="form-control" name="catContent" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Kategori Açıklaması Giriniz">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                    <label for="exampleInputName">Kategori Numarası:</label>
                    <input class="form-control" name="catNo" id="exampleInputName" type="number" min="0" max="4" aria-describedby="nameHelp" placeholder="Kategorilerden bir tanesini giriniz: 1,2,3,4. Örn(1)">
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
              <button class="btn btn-primary btn-block" type="submit" name="cat_add" value="1">Kategori Oluştur</button>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6">
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
          </form>
        </div>
      </div>
    </div>

    <script>
     CKEDITOR.replace('editor1');
    </script>


<?php require view('admin/static/footer'); ?>
