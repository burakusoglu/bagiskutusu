<?php require view('admin/static/header'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo admin_url('index'); ?>">Anasayfa</a>
        </li>
        <li class="breadcrumb-item active">Üzerine Aldığın Talepler</li>
      </ol>
      <div class="row">
               <div class="col-12 text-align">
                 <div class="card mb-3">
                         <div class="card-header">
                           <i class="fa fa-bullhorn"></i> Talep Açan Kişi Bilgileri</div>
                         <div class="card-body">
                           <div class="table-responsive">
                             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                               <thead>
                                 <tr>
                                   <th>İsim</th>
                                   <th>Soyisim</th>
                                   <th>Mail</th>
                                   <th>Telefon</th>
                                   <th>Açıklama Yazısı</th>
                                   <th>Kimlik Bilgisi</th>
                                   <th>Belge</th>
                                   <th>Şehir</th>
                                   <th>Adres</th>                
                                 </tr>
                               </thead>
                               <?php
                                if ( $request ){
                                  foreach ( $request as $row ){
                                    ?>
                                 <tr>
                                   <td><?php echo $row['requestName'] ?></td>
                                   <td><?php echo $row['requestSurname'] ?></td>
                                   <td><?php echo $row['requestMail'] ?></td>
                                   <td><?php echo $row['requestPhone'] ?></td>
                                   <td><?php echo $row['requestComment'] ?></td>
                                   <td><?php echo $row['requestTC'] ?></td>
                                   <td><img style="width:50%;" src="<?=asset_url('img/request/').$row['requestDocument']; ?>"></td>
                                   <td><?php echo $row['name'] ?></td>
                                   <td><?php echo $row['requestAddress'] ?></td>
                                 </tr>
                                  <?php }} ?>
                             </table>
                           </div>
                         </div>

                       </div>
                     </div>


                 </form>
               </div>

           </div>
      


        </div>
      </div>
    </div>

      </div>
</div>



<?php require view('admin/static/footer'); ?>
