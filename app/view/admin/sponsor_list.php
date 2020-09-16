<?php require view('admin/static/header'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="<?php echo admin_url('index'); ?>">Anasayfa</a>
        </li>
        <li class="breadcrumb-item active">Sponsorlar Listesi</li>

      </ol>
      <div class="row">
               <div class="col-12 text-align">
                 <div class="card mb-3">
                         <div class="card-header">
                           <i class="fa fa-users"></i> Eklediğin Sponsorlar</div>
                         <div class="card-body">
                           <div class="table-responsive">
                             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                               <thead>
                                 <tr>
                                   <th>Sponsor Yazısı</th>
                                   <th>Sponsor Telefonu</th>
                                   <th>Sponsor Resmi</th>
                                   <th>Sponsor Web Sitesi</th>
                                   <th>Sil</th>
                                 </tr>
                               </thead>
                               <tbody>
                               <?php
                                if ( $sorgu ){
                                  foreach ( $sorgu as $row ){
                                    ?>
                                 <tr>
                                   <td><?php echo $row['name'] ?></td>
                                   <td><?php echo $row['phone'] ?></td>
                                   <td><?php echo $row['sponsorLink'] ?></td>
                                   <td><img style="width:50%;" src="<?=asset_url('img/sponsor/').$row['image']; ?>"></td>
                                   <td>                                   <form method="post">
                                       <button onclick="return confirm('Silmek istediğinizden emin misiniz?')" class="btn btn-danger btn-block"  type="submit" name="sil" value="<?php echo $row['sponsorID']; ?>">Sil</button>
                                   </form></td>
                                 </tr>
                                  <?php }} ?>
                                
                                  </tbody>
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
