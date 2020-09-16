<?php require view('admin/static/header'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="<?php echo admin_url('index'); ?>">Anasayfa</a>
        </li>
        <li class="breadcrumb-item active">Düzenlediğin Etkinlikler</li>
      </ol>
      <div class="row">
               <div class="col-12 text-align">
                 <div class="card mb-3">
                         <div class="card-header">
                           <i class="fa fa-bell"></i> Düzenlediğin Etkinlikler</div>
                         <div class="card-body">
                           <div class="table-responsive">
                             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                               <thead>
                                 <tr>
                                 <th>Etkinlik Adı</th>
                                   <th>Etkinlik Yeri</th>
                                   <th>Etkinlik Günü</th>
                                   <th>Etkinlik Ayı</th>
                                   <th>Etkinlik Saati</th>
                                   <th>Etkinlik Düzenle</th>
                                   <th>Etkinlik Sil</th>
                                 </tr>
                               </thead>
                               <tbody>
                                 <?php
                                if ($sorgu ){
                                  foreach ( $sorgu as $row ){
                                    ?>
                                 <tr>
                                   <td><?php echo $row['title'] ?></td>
                                   <td><?php echo $row['place'] ?></td>
                                   <td><?php echo $row['day'] ?></td>
                                   <td><?php echo $row['mounth'] ?></td>
                                   <td><?php echo $row['clock'] ?></td>
                                   <td><a style="color:#35d074;" href="<?php echo admin_url('activity_edit/').permalink($row['activityID']); ?>">Düzenle</a></td>
                                   <td>
                                   <form method="post">
                                       <button onclick="return confirm('Silmek istediğinizden emin misiniz?')" class="btn btn-danger btn-block"  type="submit" name="sil" value="<?php echo $row['activityID']; ?>">Sil</button>
                                   </form>
                                 </tr>
                                  <?php }} ?>
                                  </td>
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
</div>



<?php require view('admin/static/footer'); ?>
