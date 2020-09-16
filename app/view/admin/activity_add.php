<?php require view('admin/static/header'); ?>



<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="<?php echo admin_url('index'); ?>">Anasayfa</a>
        </li>
        <li class="breadcrumb-item active">Etkinlik Ekle</li>
      </ol>
      <div class="row">
        <div class="col-12 text-align">

          <form action="" method="post">
            <div class="form-group">
              <div class="col-md-6">
                    <label for="exampleInputName">Etkinlik Adı:</label>
                    <input class="form-control" name="activityName" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Etkinlik Adını Giriniz">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                    <label for="exampleInputName">Etkinlik Yeri:</label>
                    <input class="form-control" name="activityPlace" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Etkinlik Yerini Giriniz">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                    <label for="exampleInputName">Etkinlik Günü:</label>
                    <input class="form-control" name="activityDay" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Etkinlik Gününü Giriniz(Örn: 1,2)">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                    <label for="exampleInputName">Etkinlik Ayı:</label>
                    <input class="form-control" name="activityMounth" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Etkinlik Ayını Giriniz(Örn: Haziran,Temmuz)">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                    <label for="exampleInputName">Etkinlik Saati:</label>
                    <input class="form-control" name="activityClock" id="appt" type="time" aria-describedby="nameHelp" >
              </div>
            </div>
          <div class="form-group">
            <div class="col-md-6">
              <button class="btn btn-primary btn-block" type="submit" name="activity_add" value="1">Ekinlik Oluştur</button>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6">
          <?php
          if (isset($error)) {
            echo danger($error);
          }
          if (isset($success)) {
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
