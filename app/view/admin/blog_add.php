<?php require view('admin/static/header'); ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="<?php echo admin_url('index'); ?>">Anasayfa</a>
        </li>
        <li class="breadcrumb-item active">Blog Yazısı Ekle</li>
      </ol>
      <form action="" method="post" enctype="multipart/form-data">
      <div class="row text-center">
       <div class="col-md-12">
         <?php
         if (isset($error)) {
           echo danger($error);
         }
         if (isset($succes)) {
           echo success($succes);
         }
         ?>

       </div>
     </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="name">Blog Adı:</label>
                       <input class="form-control"  name="postName" type="text" aria-describedby="nameHelp" placeholder="Blog Adını Giriniz">
                 </div>
               </div>
               <div class="form-group">
            <div class="col-md-6">
                <label for="content">Blog İçeriği:</label>
                <textarea class="form-control" name="content" id="editor1"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6">
                <label for="tags">Etiket Ekle:</label>
                <input type="text" value="<?php echo $sorgu['tag'] ?>" name="tag" data-role="tagsinput" class="form-control" />
            </div>
          </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="image">Blog Resmi:</label>
                       <input class="form-control" type="file" name="bImg" class="form-control-file">
                 </div>
               </div>
             <div class="form-group">
               <div class="col-md-6">
                 <button class="btn btn-primary btn-block" type="submit" name="blog_add" value="1">Blog Ekle</button>
               </div>
             </div>
             </form>
    </div>

  </div>
            
    <script>
     CKEDITOR.replace('editor1');
    </script>

<?php require view('admin/static/footer'); ?>



         

