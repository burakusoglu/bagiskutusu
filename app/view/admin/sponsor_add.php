<?php require view('admin/static/header'); ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="<?php echo admin_url('index'); ?>">Anasayfa</a>
        </li>
        <li class="breadcrumb-item active">Sponsor</li>
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
                       <label for="name">Sponsor Adı:</label>
                       <input class="form-control"  name="name" type="text" aria-describedby="nameHelp" placeholder="Sponsor Adını Giriniz">
                 </div>
               </div>
               <div class="form-group">
            <div class="col-md-6">
                <label for="content">Sponsor Telefonu:</label>
                <input class="form-control" name="tel" type="text" placeholder="Sponsor Telefon Numarası"></input>
            
          </div>
          <div class="col-md-6">
                <label for="content">Sponsor Web Sitesi:</label>
                <input class="form-control" name="link" type="text" placeholder="Sponsor İnternet Sitesi"></input>
            </div>
          </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="image">Sponsor Resmi:</label>
                       <input class="form-control" type="file" name="sImg" class="form-control-file">
                 </div>
               </div>

             <div class="form-group">
               <div class="col-md-6">
                 <button class="btn btn-primary btn-block" type="submit" name="sponsor_add" value="1">Sponsor Ekle</button>
               </div>
             </div>
             </form>
    </div>

  </div>

<?php require view('admin/static/footer'); ?>



         

