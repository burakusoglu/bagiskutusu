<?php require view('admin/static/header'); ?>



<div class="content-wrapper">
   <div class="container-fluid">
     <ol class="breadcrumb">
       <li class="breadcrumb-item">
         <a href="#"> Ayarlar / Site Ayarları</a>
       </li>
     </ol>
     <div class="row">
       <div class="col-md-12">
         <div class="card mb-3">
                <div class="card-header">
                  <i class="fa fa-table"></i> Genel Ayarlar</div>
                <div class="card-body">
                  <form action="" method="post">
                    <div class="form-group">
                      <div class="col-md-12">
                            <label for="title">Anasayfa Başlık (Title):</label>
                            <input class="form-control" name="title" id="title" type="text" value="<?php echo $settings['title'] ?>">
                      </div>
                    </div>
  

                    <div class="form-group">
                      <div class="col-md-12">
                            <label for="description">Site Açıklaması (Description):</label>
                            <textarea class="form-control" name="description" id="description" rows="4" cols="80"><?php echo $settings['description'] ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                            <label for="eposta">E-Posta:</label>
                            <input class="form-control" name="email" id="eposta" type="text" value="<?php echo $settings['mail'] ?>">
                      </div>
                    </div>

                     <div class="form-group">
                      <div class="col-md-12">
                            <label for="facebook">Facebook Link:</label>
                            <input class="form-control" name="facebook" id="facebook" type="text" value="<?php echo $settings['facebookLink'] ?>">
                      </div>
                    </div>
                     <div class="form-group">
                      <div class="col-md-12">
                            <label for="twitter">Twitter Link:</label>
                            <input class="form-control" name="twitter" id="twitter" type="text" value="<?php echo $settings['twitterLink'] ?>">
                      </div>
                    </div>
                     <div class="form-group">
                      <div class="col-md-12">
                            <label for="instagram">İnstagram Link:</label>
                            <input class="form-control" name="instagram" id="instagram" type="text" value="<?php echo $settings['instagramLink'] ?>">
                      </div>
                    </div>
            
                    <div class="form-group">
                      <div class="col-md-12">
                            <label for="linkedin">Linkedin Link:</label>
                            <input class="form-control" name="linkedin" id="linkedin" type="text" value="<?php echo $settings['linkedinLink'] ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                            <label for="editor1">Sistem Mesajı:</label>
                            <textarea class="form-control" name="systemMessage" id="editor1" rows="4" cols="80"><?php echo $settings['announcment'] ?></textarea>
                      </div>
                    </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <button class="btn btn-primary btn-block" type="submit" name="settingsUpdate" value="1">Güncelle</button>
                    </div>
                  </div>
                  </form>
                </div>
          </div>
       </div>
     </div>
     
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
   </div>

        <script>
            CKEDITOR.replace('editor1');
        </script>

<?php require view('admin/static/footer'); ?>
