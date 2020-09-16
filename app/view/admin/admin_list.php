<?php require view('admin/static/header'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo admin_url('index'); ?>">Anasayfa</a>
        </li>
        <li class="breadcrumb-item active">Kurumlar</li>
      </ol>
      <div class="row">
               <div class="col-12 text-align">
                 <div class="card mb-3">
                         <div class="card-header">
                           <i class="fa fa-bullhorn"></i> Kurum Listesi</div>
                         <div class="card-body">
                           <div class="table-responsive">
                             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                               <thead>
                                 <tr>
                                   <th>Kurum Adı</th>
                                   <th>Kurum Mail Adresi</th>
                                   <th>Kurum Telefon Numarası</th>   
                                   <th>Kurumu Sil</th>
                                 </tr>
                               </thead>
                               <?php
                                if ( $request ){
                                  foreach ( $request as $row ){
                                    ?>
                                 <tr>
                                   <td><?php echo $row['societyName'] ?></td>
                                   <td><?php echo $row['societyMail'] ?></td>
                                   <td><?php echo $row['societyPhone'] ?></td>
                                   <td>
                                   <form method="post">
                                       <button onclick="return confirm('Silmek istediğinizden emin misiniz?')" class="btn btn-danger btn-block"  type="submit" name="sil" value="<?php echo $row['societyID']; ?>">Sil</button>
                                   </form>
                                   </td>
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
