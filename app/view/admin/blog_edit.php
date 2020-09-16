<?php require view('admin/static/header'); ?>
<div class="content-wrapper">
    <div class="container-fluid">
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
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="">Blog Yazıları</a>
        </li>
        <li class="breadcrumb-item active">Blog Yazını Düzenle</li>
      </ol>
      <div class="row">
          <div class="col-12 text-align">
            <div class="card mb-3">
                    <div class="card-header">
                      <i class="fa fa-bell"></i> Blog Yazısı Bilgileri</div>
                    <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <div class="col-md-6">
                    <label for="exampleInputName">Blog Başlığı:</label>
                    <input class="form-control" name="postName" type="text" aria-describedby="nameHelp" placeholder="Blog Başlığı Giriniz" value="<?php echo $blogValue['title'];  ?>">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                    <label for="editor1">Blog İçeriği:</label>
                    <textarea class="form-control" name="content" id="editor1"><?php echo $blogValue['text'] ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                    <label for="exampleInputName">Blog Etiketleri:</label>
                    <input type="text" value="<?php echo $blogValue['tag'] ?>" name="postTag" data-role="tagsinput" class="form-control" />
              </div>
            </div>
            <div class="form-group">
                      <div class="col-md-12">
                            <label for="exampleInputName">Blog Resmi:</label>
                              <input type="file" name="bLogo" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                    </div>
          <div class="form-group">
            <div class="col-md-6">
              <button class="btn btn-primary btn-block" type="submit" name="blog_update" value="1">Düzenle</button>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6">
        </div>
      </div>
          </form>
        </div>
      </div>
    </div>


    </div>
  </div>
  <script>
     CKEDITOR.replace('editor1');
    </script>

<?php require view('admin/static/footer'); ?>
