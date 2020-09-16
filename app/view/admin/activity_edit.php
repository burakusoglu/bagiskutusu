<?php require view('admin/static/header'); ?>
<div class="content-wrapper">

    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="">Etkinlikler</a>
        </li>
        <li class="breadcrumb-item active">Etkinlik Düzenle</li>
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
                      <i class="fa fa-bell"></i> Etkinlik Bilgileri</div>
                    <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <div class="col-md-6">
                    <label for="exampleInputName">Etkinlik Adı:</label>
                    <input class="form-control" name="postName" type="text" aria-describedby="nameHelp" placeholder="Etkinlik Adını Giriniz" value="<?php echo $activityValue['title'];  ?>">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                    <label for="exampleInputName">Etkinlik Yeri:</label>
                    <input class="form-control" name="postPlace" type="text" aria-describedby="nameHelp" placeholder="Etkinlik Yerini Giriniz" value="<?php echo $activityValue['place'];  ?>">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                    <label for="exampleInputName">Etkinlik Günü:</label>
                    <input class="form-control" name="postDay" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Etkinlik Gününü Giriniz(Örn: 1,2)" value="<?php echo $activityValue['day'];  ?>">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                    <label for="exampleInputName">Etkinlik Ayı:</label>
                    <input class="form-control" name="postMounth" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Etkinlik Ayını Giriniz(Örn: Haziran,Temmuz)"value="<?php echo $activityValue['mounth'];  ?>">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                    <label for="exampleInputName">Etkinlik Saati:</label>
                    <input class="form-control" name="postClock" type="text" aria-describedby="nameHelp" placeholder="Etkinlik Saatini Giriniz" value="<?php echo $activityValue['clock'];  ?>">
              </div>
            </div>
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
