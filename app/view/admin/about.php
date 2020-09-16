<?php require view('admin/static/header'); ?>



<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo admin_url('about'); ?>">Hakkımızda</a>
        </li>
      </ol>
      <div class="row">
        <div class="col-12 text-align">

          <form action="" method="post">
            <div class="form-group">
              <div class="col-md-12">
                    <label for="exampleInputName">Hakkımızda Yazısı:</label>
                    <textarea class="form-control" name="aboutText" id="editor1" type="text">
                        <?php echo $sorgu["hakkimizda"]; ?>
                    </textarea>
              </div>
            </div>
          
          <div class="form-group">
            <div class="col-md-12">
              <button class="btn btn-primary btn-block" type="submit" name="aboutUpdate" value="1">Güncelle</button>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6">
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
          </form>
        </div>
      </div>
    </div>

        <script>
            CKEDITOR.replace('editor1');
        </script>
<?php require view('admin/static/footer'); ?>
